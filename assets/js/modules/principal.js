$(function () {
    var ini = {
        timers: [],
        init: function () {
            ini.events();
            ini.listVmAssigned();
        },
        //Eventos de la ventana.
        events: function () {
            //Al darle clic a una fila llama la funcion onClickTrTablaEditOts
            $('#tablaClientes').on('click', 'tr', ini.onClickTrTablaEditOts);
        },
        // Capturo los valores de la fila a la que le doy clic
        onClickTrTablaEditOts: function () {
            var tr = $(this);
            ini.tr = tr;
            if (ini.tablaClientes) {
                var registro = ini.tablaClientes.row(tr).data();
                //si selecciona el header de la tabla no se muestre el modal
                if (registro != undefined) {
                    location.href =  app.urlTo('CclientServices/specificClient?idCliente=' + registro.k_id_cliente);
//                    location.href =   baseurl + '/clientService?idCliente='+registro.k_id_cliente;
                }
            }

        },
        //llama el modal
        modalEditar: function (registro) {
            //mostrar modal
            $('#modalEditTicket').modal('show');
        },
        /**
         * Listará las actividades de los usuarios que ingresan al sistema...
         */
        listVmAssigned: function () {
            //Invoca fillTable para configurar la TABLA.
            // ini.fillTable([]);
            //Realiza la petición AJAX para traer los datos...
            var alert = dom.printAlert('Consultando registros, por favor espere.', 'loading', $('#principalAlert'));
            app.post('Cliente/getAllClient')
                    .complete(function () {
                        alert.hide();
                        $('.contentPrincipal').removeClass('hidden');
                    })
                    .success(function (response) {
                        console.log(response);
                        if (app.successResponse(response)) {
                            ini.fillTable(response.data);
                        } else {
                            ini.fillTable([]);
                        }
                    }).error(function (e) {
                console.error(e);
            }).send();
        },
        //Temporalmente...
        fillNA: function () {
            return "N/A";
        },
        getLogo: function (obj) {
            return '<div class="btn-group">'
                    + '<img src="' + baseurl + '/assets/img/' + obj.k_id_cliente + '.png" alt="' + obj.n_name_cliente + '" style="width: 35%;">'
                    + '</div>';
        },
        fillTable: function (data) {
            if (ini.tablaClientes) {
                dom.refreshTable(ini.tablaClientes, data);
                return;
            }
            ini.tablaClientes = $('#tablaClientes').DataTable(dom.configTable(data,
                    [
                        {title: "Logo", data: ini.getLogo},
                        {title: "Nombre Cliente", data: "n_name_cliente"},
                    ],
                    ));
        }
    };

    ini.init();
});
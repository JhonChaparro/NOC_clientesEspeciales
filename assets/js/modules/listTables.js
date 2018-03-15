$(function () {
    mostrar = {
        init: function () {
            mostrar.events();
            mostrar.getListContacts();
            mostrar.getListServices();
        },

        getListContacts: function(){
            $.post(baseurl + "/CclientServices/getListContacs",
                {
                    "idCliente": idCliente
                 },
                function (data) {
                    var obj = JSON.parse(data);
                    mostrar.printTableContacts(obj);        
                }
            );
        },

        getListServices: function() {
            $.post(baseurl + "/CclientServices/getListServicios",
                {
                    "idCliente": idCliente
                 },
                function (data) {
                    var obj = JSON.parse(data);
                    mostrar.printTableServices(obj);        
                }
            );
        },

        //Eventos de la ventana.
        events: function () {
            

        },


        printTableContacts: function(data) {
            mostrar.tablaContactos = $('#tableContactos').DataTable(mostrar.configTable(data, [
                    {title: "nivel", data: "n_nivel_esc"},
                    {title: "Nombre", data: "n_nombre_contacto"},
                    {title: "Cargo", data: "n_cargo"},
                    {title: "Num Habil", data: "n_numero_habil"},
                    {title: "Num No Habil", data: "n_numero_no_habil"},
                    {title: "Correo", data: "n_correo"}
                    
                ]));
            // console.log(mostrar.tablaContactos);
        },


        printTableServices: function(data) {
            mostrar.tablaServicios = $('#tableServicios').DataTable(mostrar.configTable(data,[
                    {title: "Entidad", data: "n_entidad"},
                    {title: "ID", data: "n_id_servicio"},
                    {title: "Id", data: "id"},
                    {title: "Alias", data: "n_alias_servicio"},
                    {title: "Proveedor UM", data: "n_proveedor_um"},
                    {title: "NOC", data: "n_noc"},
                    {title: "Telefono", data: "n_telefono"}
                    
                ]));
        },




        configTable: function (data, columns, onDraw) {
            return {
              data: data,
              columns: columns,
              "language": {
                  "url": baseurl + "/assets/plugins/datatables/lang/es.json"
              },
              columnDefs: [{
                      defaultContent: "",
                      // targets: 0,
                      orderable: false,
                  }],
              order: [[0, 'asc']],
              drawCallback: onDraw
            }
        },







    };

    mostrar.init();
});
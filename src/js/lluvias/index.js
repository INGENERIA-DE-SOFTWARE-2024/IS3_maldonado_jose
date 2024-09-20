import { Dropdown } from "bootstrap";
import DataTable from "datatables.net-bs5";
import { lenguaje } from "../lenguaje";



const Buscar = async () => {
    const url = '/IS3_maldonado_jose/API/lluvias/buscar';

    const config = {
        method: 'GET'
    };

    const respuesta = await fetch(url, config);
    const datos = await respuesta.json();
    datatable.clear().draw();

    if (datos) {
        datatable.rows.add(datos).draw();
    }
 
};

const datatable = new DataTable('#lluvias', {
    data: null,
    language: lenguaje,
    columns: [
        {
            title: 'No.',
            data: null, 
            width: '%',
            render: (data, type, row, meta) => {
                return meta.row + 1;
            }
        },
        {
            title: 'Nombre',
            data: 'usu_nombre'
        },
        {
            title: 'Dependencia',
            data: 'lluv_dependencia'
        },
        {
            title: 'Fecha',
            data: 'lluv_fecha'
        },
        {
            title: 'Situación',
            data: 'lluv_situacion'
        }
    ]
});
Buscar();
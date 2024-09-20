import { Dropdown } from 'bootstrap';
import L from 'leaflet';

// Inicialización del mapa
const map = L.map('map', {
    center: [15.783471, -90.230759],
    zoom: 7,
    layers: []
});

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

// Crear las capas para los marcadores y las rutas
const markerLayer = L.layerGroup().addTo(map);
const routeLayer = L.layerGroup().addTo(map);

const icon = L.icon({
    iconUrl: './images/inicio.png',
    iconSize: [50, 35]
});

const icon2 = L.icon({
    iconUrl: './images/destino.png',
    iconSize: [35, 35]
});

// Función para calcular la distancia entre dos puntos
const getRadiusFromCoordinates = (latOrigen, lngOrigen, latDestino, lngDestino) => {
    const distance = map.distance([latOrigen, lngOrigen], [latDestino, lngDestino]);
    return distance; // Retornar la distancia como radio (en metros)
};

const Lluvias = async () => {
    try {
        const url = '/IS3_maldonado_morales/API/lluvias/mapa';

        const config = {
            method: 'GET'
        };

        const respuesta = await fetch(url, config);
        const datos = await respuesta.json();
        
        datos.forEach(lluvias => {
            // Convertir las coordenadas de origen y destino
            const [latOrigen, lngOrigen] = lluvias.lluv_critica.split(', ').map(Number);
            const [latDestino, lngDestino] = lluvias.lluv_radio.split(', ').map(Number);

            // Añadir marcador de origen
            L.marker([latOrigen, lngOrigen], { icon: icon }).addTo(markerLayer);

            // Añadir marcador de destino
            L.marker([latDestino, lngDestino], { icon: icon2 }).addTo(markerLayer);

            // Añadir ruta entre origen y destino
            L.polyline([[latOrigen, lngOrigen], [latDestino, lngDestino]], {
                color: 'blue',
                weight: 3,
                opacity: 0.7
            }).addTo(routeLayer);

            // Calcular el radio basado en la distancia entre el origen y el destino
            const radius = getRadiusFromCoordinates(latOrigen, lngOrigen, latDestino, lngDestino);

            // Añadir un círculo para representar el radio desde el origen
            L.circle([latOrigen, lngOrigen], {
                color: 'red', // Color del borde
                fillColor: '#f03', // Color del área
                fillOpacity: 0.3, // Transparencia
                radius: radius // Radio calculado
            }).addTo(markerLayer);
        });
    } catch (error) {
        console.error('Error fetching lluvias:', error);
    }
};

Lluvias();

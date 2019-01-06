<?php
$ppath = plugins_url( 'include/mdats.js', __FILE__ );
?>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/1.5.1/vue-resource.min.js"></script>
<script src=" <?php echo $ppath ?>"></script> 
<div id='mdat'>
    <h3>Extremos meteorológicos registrados en provincias españolas</h3>
        <select v-if="estacion === ''" v-model="estacion">
            <option disabled value="">Seleccione provincia</option>
            <option v-for="estacion in estaciones"  :key="estacion.indicativo" v-bind:value = "estacion">{{ estacion.provincia }}</option>
        </select>
    <div v-if="estacion" class="framed-box">
        Provincia: <strong>{{estacion.provincia }}</strong> Estación: <strong>{{ estacion.nombre }}</strong></br>
        Latitud: {{ estacion.latitud }} Longitud: {{ estacion.longitud }} Altitud: {{ estacion.altitud }} m
    </div>
    <mdats v-bind:est_id="estacion.indicativo" api_key=
           'eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJhdXRzZXRAY2xpbWFyaXNrLmNvbSIsImp0aSI6ImY2YmNjMmUzLTQ5OTYtNGE1My1hZGNhLWM1YjgxZDA4NDQ1ZiIsImlzcyI6IkFFTUVUIiwiaWF0IjoxNTEwNzM4OTgyLCJ1c2VySWQiOiJmNmJjYzJlMy00OTk2LTRhNTMtYWRjYS1jNWI4MWQwODQ0NWYiLCJyb2xlIjoiIn0.5ubckX8M1GBIpb3uTLEBZV_-2wwJVm5flKxfFhjlVL4'>
    </mdats>
</div>
    
    <script>
        new Vue ({
            el: '#mdat',
            data: {
            estaciones: [ {
                "latitud" : "431825N",
                "provincia" : "A CORUÑA",
                "altitud" : "98",
                "indicativo" : "1387E",
                "nombre" : "A CORUÑA AEROPUERTO",
                "indsinop" : "08002",
                "longitud" : "082219W"
                }, {
                "latitud" : "385715N",
                "provincia" : "ALBACETE",
                "altitud" : "702",
                "indicativo" : "8175",
                "nombre" : "ALBACETE BASE AÉREA",
                "indsinop" : "08280",
                "longitud" : "015123W"
                }, {
                "latitud" : "381658N",
                "provincia" : "ALICANTE",
                "altitud" : "43",
                "indicativo" : "8019",
                "nombre" : "ALICANTE/ALACANT AEROPUERTO",
                "indsinop" : "08360",
                "longitud" : "003415W"
                }, {
                "latitud" : "365047N",
                "provincia" : "ALMERIA",
                "altitud" : "21",
                "indicativo" : "6325O",
                "nombre" : "ALMERÍA AEROPUERTO",
                "indsinop" : "08487",
                "longitud" : "022125W"
                }, {
                "latitud" : "425255N",
                "provincia" : "ARABA/ALAVA",
                "altitud" : "513",
                "indicativo" : "9091O",
                "nombre" : "FORONDA-TXOKIZA",
                "indsinop" : "08080",
                "longitud" : "024406W"
                }, {
                "latitud" : "433401N",
                "provincia" : "ASTURIAS",
                "altitud" : "127",
                "indicativo" : "1212E",
                "nombre" : "ASTURIAS AEROPUERTO",
                "indsinop" : "08011",
                "longitud" : "060239W"
                }, {
                "latitud" : "403933N",
                "provincia" : "AVILA",
                "altitud" : "1130",
                "indicativo" : "2444",
                "nombre" : "ÁVILA",
                "indsinop" : "08210",
                "longitud" : "044048W"
                }, {
                "latitud" : "385300N",
                "provincia" : "BADAJOZ",
                "altitud" : "185",
                "indicativo" : "4452",
                "nombre" : "BADAJOZ AEROPUERTO",
                "indsinop" : "08330",
                "longitud" : "064850W"
                }, {
                "latitud" : "411734N",
                "provincia" : "BARCELONA",
                "altitud" : "4",
                "indicativo" : "0076",
                "nombre" : "BARCELONA AEROPUERTO",
                "indsinop" : "08181",
                "longitud" : "020412E"
                }, {
                "latitud" : "431753N",
                "provincia" : "BIZKAIA",
                "altitud" : "42",
                "indicativo" : "1082",
                "nombre" : "BILBAO AEROPUERTO",
                "indsinop" : "08025",
                "longitud" : "025423W"
                }, {
                "latitud" : "422125N",
                "provincia" : "BURGOS",
                "altitud" : "891",
                "indicativo" : "2331",
                "nombre" : "BURGOS AEROPUERTO",
                "indsinop" : "08075",
                "longitud" : "033713W"
                }, {
                "latitud" : "392817N",
                "provincia" : "CACERES",
                "altitud" : "394",
                "indicativo" : "3469A",
                "nombre" : "CÁCERES",
                "indsinop" : "08261",
                "longitud" : "062020W"
                }, {
                "latitud" : "364502N",
                "provincia" : "CADIZ",
                "altitud" : "27",
                "indicativo" : "5960",
                "nombre" : "JEREZ DE LA FRONTERA AEROPUERTO",
                "indsinop" : "08451",
                "longitud" : "060321W"
                }, {
                "latitud" : "432526N",
                "provincia" : "CANTABRIA",
                "altitud" : "3",
                "indicativo" : "1109",
                "nombre" : "SANTANDER AEROPUERTO",
                "indsinop" : "08021",
                "longitud" : "034932W"
                }, {
                "latitud" : "395726N",
                "provincia" : "CASTELLON",
                "altitud" : "43",
                "indicativo" : "8500A",
                "nombre" : "CASTELLÓN DE LA PLANA, ALMAZORA",
                "indsinop" : "08286",
                "longitud" : "000419W"
                }, {
                "latitud" : "385921N",
                "provincia" : "CIUDAD REAL",
                "altitud" : "628",
                "indicativo" : "4121",
                "nombre" : "CIUDAD REAL",
                "indsinop" : "08348",
                "longitud" : "035513W"
                }, {
                "latitud" : "375056N",
                "provincia" : "CORDOBA",
                "altitud" : "90",
                "indicativo" : "5402",
                "nombre" : "CÓRDOBA AEROPUERTO",
                "indsinop" : "08410",
                "longitud" : "045048W"
                }, {
                "latitud" : "400402N",
                "provincia" : "CUENCA",
                "altitud" : "948",
                "indicativo" : "8096",
                "nombre" : "CUENCA",
                "indsinop" : "08231",
                "longitud" : "020755W"
                }, {
                "latitud" : "431823N",
                "provincia" : "GIPUZKOA",
                "altitud" : "251",
                "indicativo" : "1024E",
                "nombre" : "DONOSTIA/SAN SEBASTIÁN, IGUELDO",
                "indsinop" : "08027",
                "longitud" : "020228W"
                }, {
                "latitud" : "415442N",
                "provincia" : "GIRONA",
                "altitud" : "143",
                "indicativo" : "0367",
                "nombre" : "GIRONA AEROPUERTO",
                "indsinop" : "08184",
                "longitud" : "024548E"
                }, {
                "latitud" : "371123N",
                "provincia" : "GRANADA",
                "altitud" : "567",
                "indicativo" : "5530E",
                "nombre" : "GRANADA AEROPUERTO",
                "indsinop" : "08419",
                "longitud" : "034722W"
                }, {
                "latitud" : "403933N",
                "provincia" : "GUADALAJARA",
                "altitud" : "639",
                "indicativo" : "3168C",
                "nombre" : "GUADALAJARA, EL SERRANILLO",
                "indsinop" : "08226",
                "longitud" : "031024W"
                }, {
                "latitud" : "371642N",
                "provincia" : "HUELVA",
                "altitud" : "19",
                "indicativo" : "4642E",
                "nombre" : "HUELVA, RONDA ESTE",
                "indsinop" : "08383",
                "longitud" : "065442W"
                }, {
                "latitud" : "420504N",
                "provincia" : "HUESCA",
                "altitud" : "546",
                "indicativo" : "9898",
                "nombre" : "HUESCA AEROPUERTO",
                "indsinop" : "08094",
                "longitud" : "001932W"
                }, {
                "latitud" : "393339N",
                "provincia" : "ILLES BALEARS",
                "altitud" : "8",
                "indicativo" : "B278",
                "nombre" : "PALMA DE MALLORCA, AEROPUERTO",
                "indsinop" : "08306",
                "longitud" : "024412E"
                }, {
                "latitud" : "374639N",
                "provincia" : "JAEN",
                "altitud" : "580",
                "indicativo" : "5270B",
                "nombre" : "JAÉN",
                "indsinop" : "08417",
                "longitud" : "034832W"
                }, {
                "latitud" : "422708N",
                "provincia" : "LA RIOJA",
                "altitud" : "353",
                "indicativo" : "9170",
                "nombre" : "LOGROÑO AEROPUERTO",
                "indsinop" : "08084",
                "longitud" : "021952W"
                }, {
                "latitud" : "275504N",
                "provincia" : "LAS PALMAS",
                "altitud" : "32",
                "indicativo" : "C649I",
                "nombre" : "GRAN CANARIA AEROPUERTO",
                "indsinop" : "60030",
                "longitud" : "152343W"
                }, {
                "latitud" : "423518N",
                "provincia" : "LEON",
                "altitud" : "916",
                "indicativo" : "2661",
                "nombre" : "LEÓN, VIRGEN DEL CAMINO",
                "indsinop" : "08055",
                "longitud" : "053904W"
                }, {
                "latitud" : "413734N",
                "provincia" : "LLEIDA",
                "altitud" : "185",
                "indicativo" : "9771C",
                "nombre" : "LLEIDA",
                "indsinop" : "08171",
                "longitud" : "003553E"
                }, {
                "latitud" : "430641N",
                "provincia" : "LUGO",
                "altitud" : "445",
                "indicativo" : "1505",
                "nombre" : "LUGO AEROPUERTO",
                "indsinop" : "08008",
                "longitud" : "072727W"
                }, {
                "latitud" : "402800N",
                "provincia" : "MADRID",
                "altitud" : "609",
                "indicativo" : "3129",
                "nombre" : "MADRID AEROPUERTO",
                "indsinop" : "08221",
                "longitud" : "033320W"
                }, {
                "latitud" : "363958N",
                "provincia" : "MALAGA",
                "altitud" : "5",
                "indicativo" : "6155A",
                "nombre" : "MÁLAGA AEROPUERTO",
                "indsinop" : "08482",
                "longitud" : "042856W"
                }, {
                "latitud" : "351635N",
                "provincia" : "MELILLA",
                "altitud" : "52",
                "indicativo" : "6000A",
                "nombre" : "MELILLA",
                "indsinop" : "60338",
                "longitud" : "025723W"
                }, {
                "latitud" : "374720N",
                "provincia" : "MURCIA",
                "altitud" : "4",
                "indicativo" : "7031",
                "nombre" : "SAN JAVIER AEROPUERTO",
                "indsinop" : "08433",
                "longitud" : "004812W"
                }, {
                "latitud" : "424637N",
                "provincia" : "NAVARRA",
                "altitud" : "459",
                "indicativo" : "9263D",
                "nombre" : "PAMPLONA AEROPUERTO",
                "indsinop" : "08085",
                "longitud" : "013900W"
                }, {
                "latitud" : "421931N",
                "provincia" : "OURENSE",
                "altitud" : "143",
                "indicativo" : "1690A",
                "nombre" : "OURENSE",
                "indsinop" : "08048",
                "longitud" : "075135W"
                }, {
                "latitud" : "421419N",
                "provincia" : "PONTEVEDRA",
                "altitud" : "261",
                "indicativo" : "1495",
                "nombre" : "VIGO AEROPUERTO",
                "indsinop" : "08045",
                "longitud" : "083726W"
                }, {
                "latitud" : "405734N",
                "provincia" : "SALAMANCA",
                "altitud" : "790",
                "indicativo" : "2867",
                "nombre" : "SALAMANCA AEROPUERTO",
                "indsinop" : "08202",
                "longitud" : "052954W"
                }, {
                "latitud" : "405643N",
                "provincia" : "SEGOVIA",
                "altitud" : "1005",
                "indicativo" : "2465",
                "nombre" : "SEGOVIA",
                "indsinop" : "08213",
                "longitud" : "040735W"
                }, {
                "latitud" : "372500N",
                "provincia" : "SEVILLA",
                "altitud" : "34",
                "indicativo" : "5783",
                "nombre" : "SEVILLA AEROPUERTO",
                "indsinop" : "08391",
                "longitud" : "055245W"
                }, {
                "latitud" : "414630N",
                "provincia" : "SORIA",
                "altitud" : "1082",
                "indicativo" : "2030",
                "nombre" : "SORIA",
                "indsinop" : "08148",
                "longitud" : "022859W"
                }, {
                "latitud" : "282839N",
                "provincia" : "STA. CRUZ DE TENERIFE",
                "altitud" : "632",
                "indicativo" : "C447A",
                "nombre" : "TENERIFE NORTE AEROPUERTO",
                "indsinop" : "60015",
                "longitud" : "161946W"
                }, {
                "latitud" : "410842N",
                "provincia" : "TARRAGONA",
                "altitud" : "71",
                "indicativo" : "0016A",
                "nombre" : "REUS AEROPUERTO",
                "indsinop" : "08175",
                "longitud" : "010949E"
                }, {
                "latitud" : "402102N",
                "provincia" : "TERUEL",
                "altitud" : "900",
                "indicativo" : "8368U",
                "nombre" : "TERUEL",
                "indsinop" : "08235",
                "longitud" : "010727W"
                }, {
                "latitud" : "395305N",
                "provincia" : "TOLEDO",
                "altitud" : "515",
                "indicativo" : "3260B",
                "nombre" : "TOLEDO",
                "indsinop" : "08272",
                "longitud" : "040243W"
                }, {
                "latitud" : "392906N",
                "provincia" : "VALENCIA",
                "altitud" : "56",
                "indicativo" : "8414A",
                "nombre" : "VALENCIA AEROPUERTO",
                "indsinop" : "08284",
                "longitud" : "002829W"
                }, {
                "latitud" : "414243N",
                "provincia" : "VALLADOLID",
                "altitud" : "846",
                "indicativo" : "2539",
                "nombre" : "VALLADOLID AEROPUERTO",
                "indsinop" : "08140",
                "longitud" : "045120W"
                }, {
                "latitud" : "413056N",
                "provincia" : "ZAMORA",
                "altitud" : "656",
                "indicativo" : "2614",
                "nombre" : "ZAMORA",
                "indsinop" : "08130",
                "longitud" : "054407W"
                }, {
                "latitud" : "413938N",
                "provincia" : "ZARAGOZA",
                "altitud" : "249",
                "indicativo" : "9434",
                "nombre" : "ZARAGOZA AEROPUERTO",
                "indsinop" : "08160",
                "longitud" : "010015W"
                } ],
            est_id: '',
            estacion: ''
            }
        })
    </script>
 
 
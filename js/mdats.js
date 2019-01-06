var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto',
                            'Septiembre', 'Octubre', 'Noviembre', 'Diciembre', 'Total año'];
                            
Vue.component('mdats', {
    props: {
        est_id: {
            type: String,
            required: true
        },
        api_key: {
            type: String,
            required: true
        }
    },
    data: function() {
        return {
        aemet: '',
        mdat: '',
        mheads: ['Mes', 'Tmin (abs)', 'Tmax (abs)', 'Tmin (med)', 'Tmax (med)', 'Pmax (acum)', 'Pmin (acum)', 'Pmax (dia)']
        }
    },
    computed: {
        aemetUrl: function() {
        return 'https://opendata.aemet.es/opendata/api/valores/climatologicos/normales/estacion/'
			+ `${this.est_id}` + '/?api_key=' + `${this.api_key}`}
    },
    watch: {
        est_id (val) {
       		this.$http.get(this.aemetUrl).then(function(response) {
        if( response.data.estado == 200) {
            var urld = response.data.datos;
            this.$http.get(urld).then(function(response){
            this.mdat = response.data
        })
      }    }) } },
    methods: {
    getmes: function(index) {
         return meses[index]      },
    newEst() {
        this.$root.estacion = ''
        },
    },
    template: `
        <div v-if="est_id">
			<div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                   <tr>
                    <th scope="col" v-for="item in mheads">
                    {{ item}}
                    </th>
                   </tr>
                </thead>
				 <tbody>
                <tr v-for="(item, index) in mdat">
                <th scope="row">{{ getmes(index)}}</th>
                <td style="text-align:right"> {{ item.ta_min_min }} </td>
                <td style="text-align:right"> {{ item.ta_max_max }} </td>
                <td style="text-align:right"> {{ item.tm_min_min }} </td>
                <td style="text-align:right"> {{ item.tm_max_max }} </td>
                <td style="text-align:right"> {{ item.p_mes_max }} </td>
                <td style="text-align:right"> {{ item.p_mes_min }} </td>
                <td style="text-align:right"> {{ item.p_max_max }} </td>
                </tr>
			</tbody>
            </table>
			</div>
            <a class="button" href="#mdat" v-if="mdat != ''" @click="newEst">Seleccionar otra provincia</button>
        </div>
    `
})
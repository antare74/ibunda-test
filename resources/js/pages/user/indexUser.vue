<template>
    <div :data-page="current">
        <div class="landing-page" v-if="current == 0">
            <p :v-for="agree in agreements" :key="agree.id">
                a
            </p>
            <img :src="'/images/mhst.png'" alt="mhst.png">
            <div class="test-information">
                <h1 class="head-intro">Mental Health Test</h1>
                <p class="text-description">Mental Health Test membantu kamu mengetahui keyakinan dirimu dalam menghadapi situasi untuk berhasil mencapai hasil yang kamu inginkan.</p>
                <button v-on:click="next(current)" class="mybtn next">Mulai</button>
            </div>
        </div>
        <div class="agreement" v-if="current == 1">
            <agreementPage></agreementPage>
            <button v-on:click="next(current)" class="mybtn next">Setuju</button>
            <button v-on:click="prev(current)" class="mybtn back">Kembali</button>
        </div>
        <div class="agreement" v-if="current == 2">
            <button v-on:click="prev(current)" class="mybtn back">Kembali</button>
        </div>
    </div>
</template>

<script>
import agreementPage from './agreementPage.vue';

export default({
    data () {
        return {
            current: 0,
            firstStep: false,
            questions: [
                {
                    id: 1,
                    ask: ''
                }
            ],
            agreements: [
                 {
                    id: 1,
                    text: 'Test ini TIDAK ditujukan untuk mendiagnosis gangguan psikologis, namun untuk membantu mengenali gambaran dirimu saat ini'
                   },
                   {
                       id: 2,
                    text: 'Apabila kamu mengalami gejala yang mengganggu, segeralah berkonsultasi ke psikolog/psikiater untuk mendapatkan penanganan yang tepat.'
                   }
            ]
        }
    },
     components: {
         agreementPage
    },
    methods: {
        next(val){
            if(val !== ''){
                return this.current = this.current+1;
            }else{
                console.log('err next method', val)
            }
        },
        agree(){
            console.log(this.agreements)
            return this.agreements
        },

        prev(val){
            if(val !== '' && val > 0){
                return this.current = this.current-1;
            }else{
                console.log('err prev method', val)
            }
            setTimeout(this.yourMethodNameThatYouWantToCallAfterEach1Sec, 50000);
        }
    }
})
</script>

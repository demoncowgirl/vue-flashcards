<template>
  <div id="app" class="container">
        <div class="card" v-for="(word, index) in cardData" :key="index" v-if="index==currentIndex">
            <div class="container text-center align-content-center">
                <div class="row">
                    <div class="col-md-12 p-2">
                        <div class="col-md-3"></div>
                        <div class="card well col-md-6 m-2">
                            <div class="card-img-top">
                                <img id="flagImage" src="assets/images/flag.png" class="img-responsive" alt="Norwegian Flag"/>
                                <div class="card-img-overlay"></div>
                                <div id="display">
                                    <h3 class="card-title">Norwegian</h3>
                                    <h1 class="card-text" id="nor_word" name="nor_word">{{nor_word}}</h1>
                                    <div class="card-body" id="nor_sentence" name ="nor_sentence">{{nor_sentence}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card well col-md-6 m-2">
                            <div class="card-img-top mt-3">
                                <img id="flagImage" src="assets/images/us_flag2.jpeg" class="img-responsive" alt="American Flag"/>
                                <div class="card-img-over:lay"></div>
                                <h3 class="card-title">English</h3>
                                <h1 class="card-text" id="eng_word" name="current_eng_word">{{eng_word}}</h1>
                                <div class="card-body" id="eng_sentence" name='current_eng_sentence'>{{eng_sentence}}</div>
                            </div>
                        </div>
                    </div>
                       <button class="btn btn-secondary btn-sm" v-on:click="prevCard(index)">Previous</button>
                      <button class="btn btn-secondary btn-sm" v-on:click="nextCard(index)">Next</button>
                </div>
            </div>
        </div>
  </div>
</template>


<script>
export default {
    name: 'card',
    props: ['cardData'],
    mounted() {
    },
    data() {
        return {
          pile_id: '',
          nor_word: '',
          nor_sentence: '',
          eng_word: '',
          eng_sentence: '',
          words:[],
          index: 0,
          currentIndex: 0,
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
      },

    methods: {
        getWord: function(cardData){
          var nor_word = this.nor_word;
          var nor_sentence = this.nor_sentence;
          var eng_word = this.eng_word;
          var eng_sentence = this.eng_sentence;
        },
        nextCard: function(index) {
            this.currentIndex = (this.currentIndex + 1) % this.words.length;
        },
        prevCard: function(index) {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            }
        },
        addWord: function(){
          this.nor_word ='',
          this.nor_sentence ='',
          this.eng_word ='',
          this.eng_sentence ='',
          this.words.push(nor_word, nor_sentence, eng_word, eng_sentence);

        },
  },
}

</script>

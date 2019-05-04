<template>
  <div class="container">
    <div class="background" style="background-color: #0A2463;">
        <div id="card-display" class="card" v-for="word in cardData" v-if="index==currentIndex">
            <div class="container text-center align-content-center">
                <div class="row">
                    <div class="col-md-12 p-2">
                        <div class="col-md-3"></div>
                        <div class="card well col-md-6 m-2">
                            <div class="card-img-top">
                                <img :id="flagImage" :src="assets/images/flag.png" class="img-responsive" alt="Norwegian Flag"/>
                                <div class="card-img-overlay"></div>
                                <div id="display">
                                    <h3 class="card-title">Norwegian</h3>
                                    <h1 class="card-text" :id="nor_word" name="current_nor_word">{{current_nor_word}}</h1>
                                    <div class="card-body" :id="nor_sentence" name ="current_nor_sentence">{{current_nor_sentence}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="card well col-md-6 m-2">
                            <div class="card-img-top mt-3">
                                <img :id="flagImage" :src="assets/images/us_flag2.jpeg" class="img-responsive" alt="American Flag"/>
                                <div class="card-img-over:lay"></div>
                                <h3 class="card-title">English</h3>
                                <h1 class="card-text" :id="eng_word" name="current_eng_word">{{current_eng_word}}</h1>
                                <div class="card-body" :id="eng_sentence" name='current_eng_sentence'>{{current_eng_sentence}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer" class="col-md-12 m-0 p-2">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="footer well col-md-9 m-4">
                            <!-- <button class="btn btn-dark btn-lg"><a :href="">Next Card</a></button>
                            <button class="btn btn-dark btn-lg"><a :href="'/words/' + word.id + '/create'">Create New Card</a></button>
                            <button class="btn btn-dark btn-lg"><a :href="'/words/' + word.id + '/edit'">Edit Card</a></button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</template>


<script>

export default {
    name: 'card-display',
    props: ['cardData'],
    data() {
        return {
          current_nor_word: '',
          current_nor_sentence: '',
          curent_eng_word: '',
          current_eng_sentence: '',
          currentIndex: 0,
          csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }
    },
    mounted() {

    },
    methods: {
        getWord: function(data){
            var current_nor_word = this.cardData.nor_word;
            var current_nor_sentence = this.cardData.nor_sentence;
            var current_eng_word = this.cardDatata.eng_word;
            var current_eng_sentence = this.cardData.eng_sentence;
        },
        nextCard: function() {
            var cards_array = this.cards;
            this.currentIndex = (this.currentIndex + 1) % this.cards_array.length;
        },
        prevCard: function() {
            if (this.currentIndex > 0) {
                this.currentIndex--
            }
        },
    },
  }

</script>

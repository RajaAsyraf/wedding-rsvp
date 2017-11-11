axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

var app = new Vue({
  el: '#app',

  data: {
    rsvp: '',
    rsvpName: '',
    sendRSVP: false,
    rsvpStatus: "Send",
    wishName: '',
    wishMessage: '',
    sendWish: false,
    wishStatus: 'Send'
  },

  computed: {
    isDisabled () {
      if (this.rsvpName.length > 1 && this.rsvp.length > 1) {
        return false;
      } else {
        return true;
      }
    },
    isDisabled2 () {
      if (this.rsvpName.length > 3 && this.wishMessage.length > 3) {
        return false;
      } else {
        return true;
      }
    }
  },

  methods: {
    addRSVP(){
      this.rsvpStatus = "Submitting...";
      var postData = {rsvpName: this.rsvpName, rsvp: this.rsvp};

      axios.post('/api/rsvp', postData).then((response) => {
          // success
          console.log(response);
          this.rsvpStatus = "Sent!";
          this.sendRSVP = true;
      }).catch((error) => {
          // error
          console.log(error);
      }).then(() => {
          // always executed
      });
    },
    addWish(){
      this.wishStatus = "Submitting...";
      var postData = {wishName: this.rsvpName, wishMessage: this.wishMessage};

      axios.post('/api/wish', postData).then((response) => {
          // success
          console.log(response);
          this.wishStatus = "Sent!";
          this.sendWish = true;
      }).catch((error) => {
          // error
          console.log(error);
      }).then(() => {
          // always executed
      });
    }
  }
});

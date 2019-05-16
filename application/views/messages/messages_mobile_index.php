<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">
    body {
  padding-top: 0;
  font-size: 12px;
  color: #777;
  background: #f9f9f9;
  font-family: 'Open Sans',sans-serif;
}

.label-danger{
        display: inline-block;
    width: 18px;
    height: 18px;
    background: #2879fe;
    color: #ffffff;
    border-radius: 50%;
    position: absolute;
    top: -3px;
    right: -10px;
    font-size: 12px;
    line-height: 1.2;
    pointer-events: none;
}
.bg-white {
  background-color: #fff;
}

.friend-list {
  list-style: none;
margin-left: -40px;
}

.friend-list li {
  border-bottom: 1px solid #eee;
}

.friend-list li a img {
  float: left;
  width: 45px;
  height: 45px;
  margin-right: 5px;
}

 .friend-list li a {
  position: relative;
  display: block;
  padding: 10px;
  transition: all .2s ease;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
}

.friend-list li.active a {
  background-color: #f1f5fc;
}

.friend-list li a .friend-name,
.friend-list li a .friend-name:hover {
  color: #777;
  text-overflow: ellipsis!important;
  width: 180px;
  overflow: hidden;
}

.friend-list li a .last-message {
  width: 65%;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}

.friend-list li a .time {
  position: absolute;
  top: 10px;
  right: 8px;
}

small, .small {
  font-size: 85%;
}

.friend-list li a .chat-alert {
  position: absolute;
  right: 8px;
  top: 27px;
  font-size: 10px;
  padding: 3px 5px;
}

.chat-message {
  padding: 60px 20px 115px;
}

.chat {
    list-style: none;
    margin: 0;
}

.chat-message{
    background: #f9f9f9;
}

.chat li img {
  width: 45px;
  height: 45px;
  border-radius: 50em;
  -moz-border-radius: 50em;
  -webkit-border-radius: 50em;
}

img {
  max-width: 100%;
}

.chat-body {
  padding-bottom: 20px;
}

.chat li.left .chat-body {
  margin-left: 70px;
  background-color: #fff;
}

.chat li .chat-body {
  position: relative;
  font-size: 11px;
  padding: 10px;
  border: 1px solid #f1f5fc;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 1px rgba(0,0,0,.05);
  -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);
}

.chat li .chat-body .header {
  padding-bottom: 5px;
  border-bottom: 1px solid #f1f5fc;
}

.chat li .chat-body p {
  margin: 0;
}

.chat li.left .chat-body:before {
  position: absolute;
  top: 10px;
  left: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-left: 1px solid #f1f5fc;
  content: '';
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
}

.chat li.right .chat-body:before {
  position: absolute;
  top: 10px;
  right: -8px;
  display: inline-block;
  background: #fff;
  width: 16px;
  height: 16px;
  border-top: 1px solid #f1f5fc;
  border-right: 1px solid #f1f5fc;
  content: '';
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
}

.chat li {
  margin: 15px 0;
}

.chat li.right .chat-body {
  margin-right: 70px;
  background-color: #fff;
}

.chat-box {
  position: fixed;
  bottom: 0;
  left: 444px;
  right: 0;
  padding: 15px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #3c8dbc;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}

div#message_mobile {
    padding-top: 10px;
}
</style>
<div class="container bootstrap snippet" id="message_mobile">
    <div class="row">
    <div class="col-md-4 bg-white p-0">
            <ul class="friend-list">
                <li class="active bounceInDown" v-for="item in listdata">
                  <a :href="item.link" class="clearfix">
                    <img :src="item.img" alt="" class="img-circle">
                    <div class="friend-name">
                      <b>{{item.fullname}}</b>
                    </div>
                    <div class="last-message text-muted">{{item.msg}}</div>
                    <small class="time text-muted">{{item.input_date}}</small>
                    <small v-if="item.noread > 0" class="chat-alert label label-danger">{{item.noread}}</small>
                  </a>
                </li>
            </ul>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/vue2-filters/dist/vue2-filters.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.slim.js"></script>
<script type="text/javascript">
var socket = io('https://socket-zahraweb.herokuapp.com/');
</script>

<script type="text/javascript">
var app = new Vue({
  mixins: [Vue2Filters.mixin],
  el: '#message_mobile',
  data: {
    listdata : [],
    baseUrl: '<?php echo base_url(); ?>',
    userid: '',
    tmpfilter : {
      limit : 20,
      page : 1,
    }
  },
  created(){
    this.getmessage();

    socket.on('chat_webapp', data => {
        console.log(data.data.to);
        console.log(this.userid);
        if(data.data.to == this.userid)
        {
          this.getmessage();
        }
    });
  },
  methods: {
    getmessage() {
      axios.get(this.baseUrl + 'messages/get_message_index', {
        params : this.tmpfilter
      })
      .then(response => {
        this.listdata = [];
        this.userid = response.data[0].from;
        response.data.forEach(element => {
          
          this.listdata.push(Object.assign(element, {link: "<?php echo base_url('messages/d/') ?>"+element.group_id+""   }));
        })
      })
    },
  },
})

</script>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css">

body {
  font-family: 'Oxygen', sans-serif;
  background-image: linear-gradient(rgb(255, 255, 255), rgb(229, 245, 255));
  height: 100%;
}
.btn {
  margin-left: 10px;
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
  margin-right: 0px;
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

.chat {
    list-style: none;
    margin: 0;
    padding: 4px;
}

.chat-message{
    background: #f9f9f9;
    margin-top: 52px;
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

.chat-message {
  padding: 4px;
  padding-bottom: 60px;
}

.chat-box {
  position: fixed;
  bottom: 0;
  right: 0;
  padding: 6px;
  border-top: 1px solid #eee;
  transition: all .5s ease;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -ms-transition: all .5s ease;
  -o-transition: all .5s ease;
}

.primary-font {
  color: #2879fa;
  font-weight: bold;
  font-family: 'Oxygen', sans-serif;
}

a:hover, a:active, a:focus {
  text-decoration: none;
  outline: 0;
}
.btn-messages {
    outline: none;
    width: calc(100% - 45px);
    min-height: 40px;
    max-height: 8rem;
    line-height: 1.43;
    overflow-y: scroll;
    overflow-x: hidden;
    border-width: 1px;
    border-style: solid;
    border-color: rgb(224, 224, 224);
    border-image: initial;
    border-radius: 20px;
    padding: 10px 16px;
}


</style>

<div class="container bootstrap snippet" id="message_mobile">
    <div class="row">

        <!--=========================================================-->
        <!-- selected chat -->
      <div class="col-md-12 bg-white" style="padding-left: 0px!important;padding-right: 0px!important">
            <div class="chat-message">
              <div class="container align-center">
                  <div class="tt-shopcart-btn">
                    <div class="col-left">
                        
                    </div>
                  </div>
              </div>
                

                <ul class="chat">
                      <div v-for="item in orderBy(listmessage, 'input_date')">
                          <li v-if="userfrom == item.from" class="right clearfix">
                            <span class="chat-img pull-right">
                              <img src="<?php echo $imguser1 ?>" alt="User Avatar">
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <strong class="primary-font">{{item.name_from}}</strong>
                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> {{item.input_date}}</small>
                              </div>
                              <p>
                                {{item.message}}
                              </p>
                            </div>
                          </li>
                          <li v-if="userfrom != item.from" class="left clearfix">
                            <span class="chat-img pull-left">
                              <img src="<?php echo $imguser2 ?>" alt="User Avatar">
                            </span>
                            <div class="chat-body clearfix">
                              <div class="header">
                                <strong class="primary-font">{{item.name_from}}</strong>
                                <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> {{item.input_date}}</small>
                              </div>
                              <p>
                                {{item.message}}
                              </p>
                            </div>
                          </li>
                  </div>
                </ul>

               
            </div>
            <div class="bottom"></div>
            <div class="chat-box col-12 bg-white">
              
              <div class="input-group">
                <input type="hidden" name="to" value="<?php echo $to ?>">
                <input class="btn-messages" placeholder="Type your message here" id="msg" name="msg" v-model="tmpdata.msg">
                <span class="input-group-btn">
                  <i class="icon-f-96 p-1" style="font-size: 37px;color:#2879fa" @click="send()"></i>
                </span>
              </div><!-- /input-group -->
            </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/vue2-filters/dist/vue2-filters.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.slim.js"></script>
<script type="text/javascript">
$(window).load(function() {
  $("html, body").animate({ scrollTop: $(document).height() }, 1000);
  $("#msg").focus();
});
var socket = io('https://protected-cliffs-60470.herokuapp.com/');
</script>

</script>
  <link rel="stylesheet" rel="stylesheet" media="screen" href="<?php echo base_url() ?>assets/css/amaran.min.css">
  <script src="<?php echo base_url('assets/js/jquery.amaran.min.js') ?>"></script>
<?php if ($this->session->flashdata('message')) {?>
  <script type="text/javascript">
$(function(){
      $.amaran({
                'message'           :"<?php echo $this->session->flashdata('message') ?>",
                'position'          :'top right',
                'clearAll'          : true
            });
});
  </script>
<?php }?>


<script type="text/javascript">
var app = new Vue({
  mixins: [Vue2Filters.mixin],
  el: '#message_mobile',
  data: {
    message: 'Hello Vue!',
    baseUrl: '<?php echo base_url(); ?>',
    id: '<?php echo $this->uri->segment('3'); ?>',
    userto : '',
    userfrom : '<?php echo user_id(); ?>',
    name : '',
    listmessage : [],
    tmpdata : {
      msg : ''
    },
    tmpfilter : {
      groupid : '<?php echo $this->uri->segment('3'); ?>',
      limit : 20,
      page : 1,
    }
  },
  created(){
    if(this.userfrom === this.id.substring(7, 14))
    {
      this.userto = this.id.substring(0, 7)
    }
    else 
    {
      this.userto = this.id.substring(7, 14)
    }

    this.getmessage(false);
    socket.on('chat_webapp', data => {
      if(data.data.to == this.userfrom && data.data.group_id == this.id)
      {
        this.listmessage.push({
          name_from: $("#title").text(),
          from : data.data.from,
          group_id : data.data.group_id,
          input_by : data.data.input_by,
          input_date : data.data.input_date,
          message : data.data.msg,
          to : data.data.to,
        })
        this.scrollTop();
      }
    });

    $(window).scroll(() => { 
      if($(window).scrollTop() == 0)
      {
        this.tmpfilter.page = this.tmpfilter.page + 1;
        this.getmessage(true);
      }
    });
  },
  methods: {
    getmessage(flag) {
      axios.get(this.baseUrl + 'messages/d1', {
        params : this.tmpfilter
      })
      .then(response => {
        
        if(response.data.length > 0)
        {
           response.data.forEach( (element) => {

              if (element.from == this.userfrom)
              {
                this.name = element.name_from;
              }
              this.listmessage.push({
                id : element.id,
                group_id : element.group_id,
                from : element.from,
                message : element.message,
                is_read : element.is_read,
                input_date : element.input_date,
                name_from : element.name_from,
                name_to : element.name_to,
              })
            });

            if(flag == true)
            {
              this.scrollTop1();
            }
        }
            

      })
    },
    send(){
      this.tmpdata.to = this.userto
      this.tmpdata.from = this.userfrom
      this.tmpdata.input_date = moment().format('YYYY-MM-DD HH:mm:ss')
      this.tmpdata.group_id = this.id
      this.tmpdata.input_by = this.tmpdata.from

      this.listmessage.push({
        name_from : this.name,
        from : this.tmpdata.from,
        group_id : this.id,
        input_by : this.tmpdata.from,
        input_date : moment().format('YYYY-MM-DD HH:mm:ss'),
        message : this.tmpdata.msg,
        to : this.userto,
      })

      axios({
        method: 'post',
        url: this.baseUrl + 'messages/add_messages',
        data: {
          to: this.userto,
          msg: this.tmpdata.msg
        }
      });

      socket.emit('chat_webapp', { data: this.tmpdata });
      this.scrollTop();
      this.tmpdata = {};
      $("#msg").focus();

      

    },
    scrollTop(){
      $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    },
    scrollTop1(){
      $("html, body").animate({ scrollTop: 1900 }, 1);
    }
  },
})

</script>
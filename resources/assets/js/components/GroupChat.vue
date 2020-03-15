<template>
    <div>
        <div class="panel panel-primary">
            <div class="panel-heading"> 
                <h4>{{ group.name }}</h4>
            </div>
            <div class="panel-body chat-panel">
                <ul class="chat" v-chat-scroll>
                    <li class="left" v-for="conversation in conversations" :key="conversation.id">
                        <div class="chat-body clearfix pad" v-if="conversation.user.id === user.id">
                            <div class="header pull-right col-12">
                                <span class="pull-right bold">
                                    {{ conversation.user.username }} <Adedotun :value="conversation.created_at" fn="humandate"/>
                                </span>
                            </div>
                            <div class="message other-message pull-right">
                                <span class="pull-right ">
                                    {{ conversation.message }}
                                    </span>
                            </div>
                        </div>
                        <div class="chat-body clearfix pad" v-else>
                            <div class="header pull-left col-12">
                                    <span class="bold">
                                        {{ conversation.user.username }} <Adedotun :value="conversation.created_at" fn="humandate"/>
                                    </span>
                            </div>
                            <div class="message my-message pull-left">
                                <span class="pull-left">{{ conversation.message }}</span>
                            </div>
                        </div>

                    </li>
                </ul>

                <div class="input-group">
                    <input id="btn-input" type="text" name="message" class="form-control form-control-lg" placeholder="Type your message here..." v-model="message" @keydown="isTyping" @keyup.enter="store()"  autofocus>

                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" id="btn-chat" @click.prevent="store()">
                            <i class="fa fa-send-o"></i>
                        </button>
                    </span>
                </div>
                <hr/>
                <span v-show="typing" class="help-block" style="font-style: italic;display:block;">
                    @{{ username }} is typing...
                </span>
            </div>
        </div>
         <!-- <div class="panel panel-primary">
            <div class="panel-heading" id="accordion">
                <span class="glyphicon glyphicon-comment"></span> {{ group.name }}
                <div class="btn-group pull-right">
                    <a type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion-" :href="'#collapseOne-' + group.id">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                </div>
            </div>
            <div class="panel-collapse collapse" :id="'collapseOne-' + group.id">
                <div class="panel-body chat-panel">
                    <ul class="chat">
                        <li v-for="conversation in conversations" :key="conversation">
                            <span class="chat-img pull-left">
                                <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                            </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">{{ conversation.user.name }}</strong>
                                </div>
                                <p>
                                    {{ conversation.message }}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." v-model="message" @keyup.enter="store()" autofocus />
                        <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat" @click.prevent="store()">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>  -->
    </div>
</template>

<script>
    import Adedotun from './adedotun';
    export default {
        props: ['group','user'],

        data() {
            return {
                conversations: [],
                message: '',
                group_id: this.group.id,
                typing: false,
                username: ''
            }
        },

        components: {
            Adedotun
        },

        created() {
            this.listenForNewMessage();
            this.getMessage();
            let _this = this;
            Echo.private('groups.' + this.group.id)
                .listenForWhisper('typing', (e) => {
                _this.username = e.username;
                _this.typing = e.typing;

                // remove is typing indicator after 0.9s
                setTimeout(function() {
                    _this.typing = false
                }, 900);
            });
        },

        methods: {
            store() {
                axios.post('/conversations/store', {message: this.message, group_id: this.group.id})
                .then((response) => {
                    this.message = '';
                    this.conversations.push(response.data);
                });
            },
            getMessage() {
                axios.get(`/conversations/${this.group.id}`)
                .then((response) => {
                    this.conversations = response.data;
                });
            },

            listenForNewMessage() {
                Echo.private('groups.' + this.group.id).listen('NewMessage', (e) => {
                    if (!("Notification" in window)) {
                        alert("Web Notification is not supported");
                        return;
                    }
                    Notification.requestPermission(permission => {
                        let notification = new Notification(
                            e.user.username ,
                            {
                                body: e.message, // content for the alert
                                // icon: "/" + message.message.profile.profile_picture // optional image url
                            }
                        );
                        // link to page on clicking the notification
                        // notification.onclick = () => {
                        //     window.open(window.location.href);
                        // };
                    });
                    this.conversations.push(e);
                });
            },
            isTyping() {
                let channel = Echo.private('groups.' + this.group.id);
                setTimeout(function() {
                    channel.whisper('typing', {
                        username: Laravel.user.username,
                        typing: true
                    });
                }, 900);
            },

        }
    }
</script>
<style>
    .chat {
        list-style: none;
        height: 500px;
        border: 1px solid lightgray;
        padding: 10px 20px 5px 10px;
        overflow-y: auto;
    }

    .chat li {
        margin-right:1px;
        /* padding: 10px; */
        background-color: #f1f2f3;
        margin-bottom: 0px;
    }

    .chat li .chat-body p {
        margin: 0;
        color: rgb(219, 241, 219);
    }
    .pad{
        margin-right:20px;
        padding: 5px;
        background-color: rgb(241, 242, 243);
    }
    .header {
        /* margin-bottom: 5px; */
        padding: 5px 10px;
        background:transparent;
    }
    .bold {
        font-weight: bold;
    }

    .panel-body {
            /* height: 350px; */
            background: #fefefe;
            padding: 20px;
            margin-bottom: 10px;
    }

    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }


    ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        background-color: #F5F5F5;
    }

    ::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }
    ::-webkit-scrollbar-thumb {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #555;
    }
    .chat-history {
        padding: 30px 30px 20px;
        border-bottom: 2px solid white;
        overflow-y: scroll;
        height: 575px;
    }
    .message-data {
        margin-bottom: 10px;
    }
    .message-data-time {
        color: lighten(gray, 8%);
        padding-left: 6px;
    }
    .message {
        color: white;
        padding: 10px 10px;
        line-height: 26px;
        font-size: 16px;
        border-radius: 10px;
        margin-bottom: 5px;
        /* width: 85%; */
        position: relative;
    }
    .my-message:after {
        bottom: 100%;
        left: 6%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        /* border-bottom-color: rgb(212, 100, 100); */
        border-width: 10px;
        margin-left: -10px;
        margin-top: 10px;
    }
    .other-message:after {
        bottom: 100%;
        right: 6%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        /* border-bottom-color: rgb(35, 221, 18); */
        border-width: 10px;
        margin-left: -10px;
        margin-top: 10px;
    }
    .my-message {
      background: #77afe4;
      color:black;
      font-size: 20px;
    }
    .other-message {
      background: rgba(170, 224, 175, 0.664);
      color:black;
      font-size: 20px;
    }
    .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }
</style>

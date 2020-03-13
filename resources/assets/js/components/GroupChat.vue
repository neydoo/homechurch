<template>
    <div>
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content" id="kt_chat_content">
            <div class="kt-chat">
                <div class="kt-portlet kt-portlet--head-lg- kt-portlet--last">
                    <div class="kt-portlet__head">
                        <div class="kt-chat__head ">
                            <div class="kt-chat__left">
                                <!--begin:: Aside Mobile Toggle -->
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md kt-hidden-desktop" id="kt_chat_aside_mobile_toggle">
                                    <i class="flaticon2-open-text-book"></i>
                                </button>
                                {{ group.name }}
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <div class="kt-scroll kt-scroll--pull" data-mobile-height="300">
                            <div class="kt-chat__messages">
                                <div v-for="conversation in conversations" :key="conversation.id">
                                    <div class="kt-chat__message kt-chat__message--right" v-if="conversation.user.id === user.id">
                                        <div class="kt-chat__user">                                
                                            <span class="kt-chat__datetime"><Adedotun :value="conversation.created_at" fn="humandate"/></span>
                                            <a href="#" class="kt-chat__username"><span>{{ conversation.user.username }}</span></a>                                
                                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                                <img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/users/300_21.jpg" alt="image">
                                            </span>
                                        </div>
                                        <div class="kt-chat__text kt-bg-light-brand">
                                            {{ conversation.message }}
                                        </div>
                                    </div>
                                    <div class="kt-chat__message" v-else>
                                        <div class="kt-chat__user">
                                            <span class="kt-media kt-media--circle kt-media--sm"> 
                                                <img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/users/100_12.jpg" alt="image">
                                            </span>
                                            <a href="#" class="kt-chat__username"><span>{{ conversation.user.username }}</span></a>
                                            <span class="kt-chat__datetime"><Adedotun :value="conversation.created_at" fn="humandate"/></span>
                                        </div>
                                        <div class="kt-chat__text kt-bg-light-success">
                                        {{ conversation.message }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="kt-portlet__foot">
                        <div class="kt-chat__input">
                            <div class="kt-chat__editor">
                                <textarea style="height: 50px" placeholder="Type here..." v-model="message" @keyup.enter="store()" autofocus></textarea>
                            </div>
                            <span v-show="typing" class="help-block" style="font-style: italic;display:block;">
                                @{{ username }} is typing...
                            </span>
                            <div class="kt-chat__toolbar">
                                <!-- <div class="kt_chat__tools">
                                    <a href="#"><i class="flaticon2-link"></i></a>
                                    <a href="#"><i class="flaticon2-photograph"></i></a>
                                    <a href="#"><i class="flaticon2-photo-camera"></i></a>
                                </div>                            -->
                                <div class="kt_chat__actions">
                                    <button type="button" class="btn btn-brand btn-md btn-upper btn-bold kt-chat__reply" id="btn-chat" @click.prevent="store()">reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

        mounted() {
            this.getMessage();
        },

        components: {
            Adedotun
        },

        created() {
            this.listenForNewMessage();
            let _this = this;
            Echo.private('groups.' + this.group.id)
                .listenForWhisper('typing', (e) => {
                _this.username = this.user.username;
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
                        // console.log(e);
                    if (!("Notification" in window)) {
                        alert("Web Notification is not supported");
                        return;
                    }
                    alert();
                    Notification.requestPermission(permission => {
                        let notification = new Notification(
                            e.user.username ,
                            {
                                body: e.message, // content for the alert
                                // icon: "/" + message.message.profile.profile_picture // optional image url
                            }
                        );
                        // link to page on clicking the notification
                        notification.onclick = () => {
                            window.open(window.location.href);
                        };
                    });
                    this.conversations.push(e);
                });
            },
        }
    }
</script>

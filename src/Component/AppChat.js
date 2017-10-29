import firebase from "firebase";
import React from "react";
import ReactFireMixin from "reactfire";
import Form from "./Form";
import List from "./List";

firebase.initializeApp({
    apiKey: 'AIzaSyC2xn8hAwKfn75Afk4N0_ypIKr-h4Vkc48',
    authDomain: 'thelastone-6ed2d.firebaseapp.com',
    databaseURL: 'https://thelastone-6ed2d.firebaseio.com',
    storageBucket: '',
});
window.firebase = firebase;

const AppChat = React.createClass({

    mixins: [ReactFireMixin],


    getInitialState() {
        return {
            messages: [],
            user: null,
        };
    },

    componentWillMount() {
        const self = this;
        var messagesRef = firebase.database().ref('messages');
        firebase.auth().onAuthStateChanged((authData) => {
            if (authData) {
                self.setState({user: authData});
                self.bindAsArray(messagesRef, 'messages');
            }
        });
    },

    componentDidUpdate() {
        var myChat = document.getElementById('chat');
        myChat.scroll(0, myChat.offsetHeight);
    },

    callbackSignOut(){
        this.setState({user:null});
        alert("change state");
    },

    render() {
        // console.log('App:render', this.state);
        const {messages, user} = this.state;
        window.user = this.state.user;
        return user ? (
                <div>
                    <div className="scrollable">
                        {
                            messages.length ? <List messages={messages}/> : <span> Loading </span>
                        }
                        <Form className="myform" messagesRef={this.messagesRef} user={user}/>
                    </div>

                </div>
            ):null;
    },
});
export default AppChat;

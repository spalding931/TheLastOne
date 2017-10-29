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

    messagesRef: firebase.database().ref('messages'),
    mixins: [ReactFireMixin],

    getInitialState() {
        return {
            messages: [],
            user: null,
        };
    },

    componentWillMount() {
        const self = this;
        firebase.auth().onAuthStateChanged((authData) => {
            if (authData) {
                self.setState({user: authData});
                self.bindAsArray(this.messagesRef, 'messages');
            }
        });
    },

    componentDidUpdate() {
        document.getElementById("chat").scroll(0,document.getElementById("chat").scrollHeight)
    },

    callbackSignOut(){
        this.setState({user:null});
        alert("change state");
    },

    render() {
        // console.log('App:render', this.state);
        const {messages, user} = this.state;
        window.user = user;
        if(user)
            document.getElementById("chat").style.visibility = "visible";
        return user ? (
                <div>
                    <div className="scrollable">
                        {
                            messages.length ? <List messages={messages}/> : <span> Loading </span>
                        }
                        <Form messagesRef={this.messagesRef} user={user}/>
                    </div>

                </div>
            ):null;
    },
});
export default AppChat;

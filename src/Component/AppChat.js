import firebase from "firebase";
import React from "react";
import ReactFireMixin from "reactfire";
import Form from "./Form";
import List from "./List";
import SignIn from "./SignIn";
import SignOut from "./SignOut";

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
        window.scroll(0, document.documentElement.offsetHeight);
    },

    callbackSignOut(){
        this.setState({user:null});
        alert("change state");
    },

    render() {
        // console.log('App:render', this.state);
        const {messages, user} = this.state;
        return !user ? <SignIn  /> : (
                <div>
                    <SignOut callback={this.callbackSignOut.bind(this)} />
                    <div className="scrollable">
                        {
                            messages.length ? <List messages={messages}/> : <span> Loading </span>

                        }
                        <Form messagesRef={this.messagesRef} user={user}/>
                    </div>

                </div>
            );
    },
});
export default AppChat;

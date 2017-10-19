import firebase from 'firebase';
import React from 'react';
import ReactFireMixin from 'reactfire';

import './App.css';
import Form from './Form';
import List from './List';
import SignIn from './SignIn';

firebase.initializeApp({
    apiKey: 'AIzaSyC2xn8hAwKfn75Afk4N0_ypIKr-h4Vkc48',
    authDomain: 'thelastone-6ed2d.firebaseapp.com',
    databaseURL: 'https://thelastone-6ed2d.firebaseio.com',
  storageBucket: '',
});
window.firebase = firebase;

const App = React.createClass({

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
      }
    });
    this.bindAsArray(this.messagesRef, 'messages');
  },
  componentDidUpdate() {
    window.scroll(0, document.documentElement.offsetHeight);
  },

  render() {
    // console.log('App:render', this.state);
    const { messages, user } = this.state;
    return !user ? <SignIn /> : (
      <div>
        {
          messages.length ? <List messages={messages} /> : 'Loading messages…'
        }
        <Form messagesRef={this.messagesRef} user={user} />
      </div>
    );
  },
});
export default App;

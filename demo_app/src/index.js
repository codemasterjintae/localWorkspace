import React, { useEffect } from 'react';
import ReactDOM from 'react-dom';
// import createSagaMiddleware from 'redux-saga';
import App from './App';
import { createStore, applyMiddleware } from 'redux';
import NoteReducer from './Reducer';
import { Provider } from 'react-redux';
import thunk from 'redux-thunk';
function Main() {

  let store = createStore(NoteReducer, applyMiddleware(thunk));
  store.subscribe(() => console.log(store.getState()));

  return (
    <Provider store={store}>
      <App />
    </Provider>
  );
}
ReactDOM.render(<Main />, document.getElementById('root'));

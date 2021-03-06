/* eslint-disable */
import React, { Component } from 'react';
import PropTypes from 'prop-types';
import logo from './logo.svg';
import './App.css';

import * as bootstrapHelpers from "./helpers/bootstrap";
export * from "./modules/index";
export const BootstrapHelpers = bootstrapHelpers;

class App extends Component {
  render() {
    return (
      <div className="App">
        <div className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h2>Welcome to React</h2>
        </div>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
      </div>
    );
  }
}

export default App;

/* eslint-disable */
import React from "react";
import { GoogleAnalytics, Page } from "./index";
import PropTypes from 'prop-types';

export class App extends React.Component {

  static propTypes = {
    googleAnalyticsKey: React.PropTypes.string,
    history: React.PropTypes.object,
  };

  render() {
    const googleAnalyticsKey = this.props.googleAnalyticsKey;
    const history = this.props.history;

    return (
      <div className="myastro-app">
        { this.props.children }
        { googleAnalyticsKey ? <GoogleAnalytics account={googleAnalyticsKey} history={history} /> : null }
      </div>
    );
  }
}
import React from "react";
import { Col } from "../../helpers/bootsrap";
import PropTypes from 'prop-types';
class TarotCard extends React.Component {
    
    static propTypes = {
        name : React.PropTypes.string.isRequired,
    };
    
    static defaultProps = {
        title: "The Fool",
    }
    
}
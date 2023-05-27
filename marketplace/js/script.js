// This script is for generating unique ids.
// Requires one-time installation of node and npm.
import { v4 as uuidv4 } from "uuid.js";
// const { v4: uuidv4 } = require('uuid');
const productId = uuidv4();
document.getElementById('productId').innerHTML = productId;

// console.log(productId);
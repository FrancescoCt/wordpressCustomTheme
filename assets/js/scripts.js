// script.js
import {FetcherImages, generateJoke} from "./functions/fetcherImages.js";
//import { FormSubmitter } from "./functions/formSubmitter.js";

console.log(generateJoke());

const fetcher = new FetcherImages('random-image').startComponent();
//const formSubmitter = new FormSubmitter("contactsForm").startComponent();

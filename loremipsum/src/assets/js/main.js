const button = document.querySelector( '.main__button' );
const text = button.innerHTML;
const arrowContent = '<span aria-hidden="true" class="button-arrow"><svg width="53px" height="19px" viewBox="0 0 53 19" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="ico/arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill="#000000" fill-rule="nonzero" id="Combined-Shape"><path d="M46.8503446,10.453125 L2.21988586e-13,10.453125 L5.68434189e-14,7.453125 L46.3301877,7.453125 L40.998383,2.12132034 L43.1197034,0 L52.3329068,9.21320344 L43.1197034,18.4264069 L40.998383,16.3050865 L46.8503446,10.453125 Z"></path></g></g></svg></span>';

button.innerHTML = text + arrowContent;

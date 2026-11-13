import AOS from 'aos';
import 'aos/dist/aos.css';

const elements = document.querySelectorAll(
	'.front-page-hero, .home-query, .blockader-banner, .live-rest-search-block'
);

elements.forEach( ( element ) => {
	element.dataset.aos = 'fade-up';
} );

document.querySelectorAll( '.feature-row' ).forEach( ( row ) => {
	row.dataset.aos = 'zoom-in';
} );

AOS.init( {
	duration: 700,
	once: true,
} );
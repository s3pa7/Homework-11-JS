/**
 * 
 */
function  showImage() {
	var theImages = new Array();

	theImages[0] = 'http://blog.eurail.com/wp-content/uploads/2014/09/Adventurous.jpg'
	theImages[1] = 'http://www.disney.fr/films/sites/default/files/monsters-university/UK/1240x689/mu_gen_char_bio_mike_1240x689_v1.jpg'
	theImages[2] = 'http://www.hatjecantz.de/files/00003865.jpg'
	theImages[3] = 'http://i.imgur.com/op5cr7N.jpg'
	theImages[4] = 'https://thetomatos.com/wp-content/uploads/2016/05/blue-star-clip-art-2.png'
	theImages[5] = 'http://www.web-fastnet.eu/movie/images/page-1_img19.jpg'
	theImages[6] = 'https://pixabay.com/static/uploads/photo/2014/09/19/12/41/star-452327_960_720.png'

	var j = 0
	var p = theImages.length;
	var preBuffer = [];
	for (i = 0; i < p; i++){
	preBuffer[i] = new Image()
	preBuffer[i].src = theImages[i]
	}
	var whichImage = Math.round(Math.random()*(p-1));
	document.write('<img width="300px" height="300px "src="'+theImages[whichImage]+'">');
}

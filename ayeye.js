console.log(o);

$(document).ready(function(){
	$('#movie_name').html('<b>Name: '+o.title+'</b>');
});

var genre_ls = [];
o.genres.forEach(function(genre){
	genre_ls.push(genre);
});

$('#movie_genre').html('<b> Genre: '+genre_ls.join(' / ')+'</b>');

$('#movie_year').html('<b>Year: '+o.year+'</b>');

$('#movie_rating').html('<b>IMDb rating: '+o.rating+'</b>');

$('#movie_cover').attr("src", o.medium_cover_image);

$('#movie_synopsis').html(o.synopsis);
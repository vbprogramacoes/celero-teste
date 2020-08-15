$.ajax({
  url: 'https://randomuser.me/api/',
  dataType: 'json',
}).done(function(data){
	console.log(data);
	console.log(data.results[0].name.first);
});
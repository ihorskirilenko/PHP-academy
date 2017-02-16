'use strickt'

console.log('Task #6, function "randomGoods", which generates array with random goods.');

//Generating an object
function randomGoods() {
	var goods = {};
	var goodsQuant = Math.floor(Math.random() * 10);
	for (i = 0; i < goodsQuant; i++) {
		var goodName = 'Товар №' + Math.floor(Math.random() * 100);
		var goodQuant = Math.floor(Math.random() * 100);
		goods[goodName] = goodQuant;
	}
	console.log(goods);
}

randomGoods();
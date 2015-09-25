
function Hero(name) {

	this._name = name;
	this._nbWins = 0;
}

Hero.prototype._name = 'Unknown hero';

Hero.prototype.fight = function (enemy) {

	if ( !enemy ) {

		console.warn('Drunk hero here!');

		throw 'You can\'t fight shadows';
	}

	if ( typeof enemy !== 'string' ) {

		this._nbWins += enemy.length;
		console.log(this._name +' defeated: '+ enemy.join(', ') +'!');
	}
	else {

		this._nbWins += 1;
		console.log(this._name +' defeated '+ enemy +'!');
	}

	return true;
};

module.exports = Hero;

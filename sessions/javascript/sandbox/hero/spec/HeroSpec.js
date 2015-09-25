

describe('Hero', function () {

	var Hero = require('../hero');

	it('fights an enemy', function () {

		var hero = new Hero('Superman'),
		result = hero.fight('Zorg');

		expect(result).toBe(true);
	});

	it('fights no one', function () {

		var hero = new Hero('Don Quichotte');

		expect(hero.fight).toThrow();
	});

	it('fights enemies', function () {

		var hero = new Hero('Batman'),
		result = hero.fight([ 'Joker', 'Bane' ]);

		expect(result).toBe(true);
	});
});

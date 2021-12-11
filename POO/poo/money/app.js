const Money = require('./money');
const Wallet = require('./wallet');

const one = new Money(1);

// one.set面值(10)
// console.log(one.get面值());

const wallet = new Wallet();
wallet.添加钞票(one);
wallet.total();

//******************************
class Livre {
    constructor(title) {
        this.title = title;
    }

    getTitle() {
        return this.title;
    }
}

const l1 = new Livre("你好");
const l2 = new Livre("你好2");

let livres = {};
// livres.push(l1);
// $this->livres[$livre->getTitre()] = $livre;
livres[l1.getTitle()] = l1;
livres[l2.getTitle()] = l2;

console.log(livres[l2.getTitle()]);
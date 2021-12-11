module.exports =
    class Wallet {
        constructor() {
            this.钞票 = []; // array
        }

        // 添加钞票
        添加钞票(money) {
            this.钞票.push(money);
        };

        // 删除钞票

        // 总账
        total() {
            let sum = 0;
            for (const money of this.钞票) {
                sum = sum + money.get面值();
            }
            console.log(`钱包里 一共有 ${sum} 元`);
        }
    };
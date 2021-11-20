### 面向对象的编程

####  我（人）开车 去北京

- 人（我）
    - 开(奥迪)车
- 车    
- 地点 （北京)

```javascript
class Location {
    private 地名；
    private  surface 面积；
}

class Car{
    private 牌子；
    private 排量；
    private 油耗；
    private 颜色；
}

class Psersonne{
    private age;
    private nom;
    private prenom;
    
    function driver(Location location) {
        console.log("去:"+location);
        // 从出发地开始
        // 加油
        // 吃饭
        // 休息
    }
}

```
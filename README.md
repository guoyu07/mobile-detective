# mobile-detective
手机号码有效性校验

## 目录结构

- MobileDetective.php      PHP 版本手机号校验组件
- MobileDetective.js       ES6 版本手机号校验组件
- TestMobileDetective.php  PHP 版本测试
- TestMobileDetective.html ES6 版本测试

## 使用

### 1.  PHP 版本

```php
require('MobileDetective.php');

$md = new MobileDetective();
var_dump($md->detective('13511111111'));

```

#### 2. ES6 版本

```js
let log = console.log.bind(console)

let md = new MobileDetective('13511111111')
log(md.detective())
```

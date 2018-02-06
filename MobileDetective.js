/**
* MobileDetective 手机号有效性校验器
* 
* @method public detective(): bool  识别给定手机号是否合法
* @author huliuqing liuqing_hu@126.com
* @version 1.0.0
*/
class MobileDetective
{
  constructor(mobile, locate = 'cn')
  {
    this.mobile = mobile
    this.locate = locate
    this.loadRegex(locate)
  }

  detective()
  {
    return this.regex.test(this.mobile)
  }

  loadRegex(locate)
  {
    this.regex = this.getRegex(locate)
  }

  getRegex(locate)
  {
    switch(locate){
      case 'cn':
        return /((13\d{1})|(15[^4])|(166)|(18\d{1})|(17[35678])|(198)|(199))\d{8}/g

      default:
        return /((13\d{1})|(15[^4])|(166)|(18\d{1})|(17[35678])|(198)|(199))\d{8}/g
    }
  }
}

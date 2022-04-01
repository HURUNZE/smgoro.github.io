// 配置
window.Config = {

  // 站点名
  SiteName: 'SMGoro Status',

  // 站点链接
  SiteUrl: 'http://status.smgoro.top/',

  // UptimeRobot Api 域名 api.uptimerobot.com
  // 只需填写域名部分，默认为官网域名
  // 因官网 API 时不时的会 CROS 报错，可填自定义反代域名
  // 详见 https://github.com/yb/uptime-status/ 说明
  ApiDomain: 'uptime.smgoro.workers.dev',

  // UptimeRobot Api Keys
  // 支持 Monitor-Specific 和 Read-Only 两只 Api Key
  ApiKeys: [
    'm790169982-40f8593f345dd36ec16c93dd', //SMGoro Status
    'm790170090-1f45cdef6d2b0e83067d70f0', //SMGoro Store
    'm790170031-9689103eed13a28a21bc2948', //MCBE服务器列表站
    'm790152309-400ac1612e8570ac4907fad5', //SMG主机节点ping
    'm790152436-58c1523ac4b8586cfafce9de', //五郎私有云主控
    'm790170193-48e754fb0d573cdbb801d313', //MineBBS
  ],

  // 是否显示监测站点的链接
  ShowLink: true,

  // 日志天数
  // 虽然免费版说仅保存60天日志，但测试好像API可以获取90天的
  // 不过时间不要设置太长，容易卡，接口请求也容易失败
  CountDays: 60,

  // 导航栏菜单
  Navi: [
    {
      text: 'Homepage',
      url: 'http://smgoro.top/'
    },
    {
      text: 'MY',
      url: 'http://status.smgoro.top/'
    },
    {
      text: 'UP',
      url: 'https://stats.uptimerobot.com/YxXvNFDgVp'
    }
  ]
};

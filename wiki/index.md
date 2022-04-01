# MDwiki 大中华版  v0.6.2


项目概述
----

**MDwiki** 是一个**基于 MarkDown 语法的轻量级 Wiki 引擎**，完全运行在网页浏览器中。

**MDwiki 大中华版**（非官方）对原作核心代码的改动 ——
 1. `已完成` 将其依赖的所有基础库的引用 URL 改为 **中国大陆地区 CDN**，并更新到最新版
 2. `已完成` **独立、整理、修补 其发布版的 CSS、JS、MD 代码**
 3. `进行中` **翻译 官方网站的文档**
 4. `待实施` 替换其依赖的国外**开放服务 SDK** 为 中文互联网同行的同类服务
 5. `待实施` 优化核心逻辑，提高加载性能

【文档、演示】—— [mdwiki.oschina.cnpaas.io](http://mdwiki.oschina.cnpaas.io/)


开发实况
----
<iframe frameBorder="0" allowTransparency="true" src="html/git_osc.html"></iframe>


特别鸣谢
----

【原作官网】—— [www.mdwiki.info](http://www.mdwiki.info/)

【墙内 CDN】—— [www.bootcdn.cn](http://www.bootcdn.cn/)（感谢 **BootStrap 中文网** - 开放 CDN 服务）

【异步加载器】—— [EasyImport.js](http://git.oschina.net/Tech_Query/EasyImport.js)（简单、好用的**文件级加载器**）


译者感言
----

译者曾是一个**百科站长**，自己创立的百科站 先后用 HDwiki、MediaWiki 驱动，期间的整站迁移、二次开发 还自己开发了一些工具。最早为 互动百科 在国内的一些努力而激动，但又为它的沉沦而气愤；后来又为 **MediaWiki “一切皆为词条”的 UNIX 式模型、强大的 API** 所折服，但却又被它 **复杂的扩展 Wiki 代码、庞杂的 API 参数、扩展依赖库启用困难、前后端性能低下**等问题搞得十分疲倦……

最近工作中又需要搭建文档系统，想想虽然国内外很多 IT 公司的**对外文档系统** 都基于 MediaWiki + 自己设计的前端界面，但从维护成本的角度，还是选择了**基于 MarkDown 语法的 Wiki 引擎**。

**MarkDown 代码** 有一些很实在的优势 ——
 1. 虽与 **Wiki 代码**一样，没有国际标准、只有流行的实现（比如 Github、Wikipedia），但有**更广泛的应用领域**（比如 代码文档、博客、百科）
 2. 虽其各种应用实现与 MediaWiki 一样，做了各种强大的**扩展插件**，但**代码语法一直保持简单**，依然可以作为**纯文本文件**让人轻松阅读
 3. 正因其简单，各种编程语言、平台上都涌现了很多好用的 **MarkDown 编辑器、解析引擎**，特别是 **Web 前端界**（MediaWiki 只能依赖其 PHP 解析引擎）

而在**版本管理**方面，Git 这样基于**文件系统模型**设计的**分布式版本控制系统**，管理文本文件的版本变化非常可靠、高效。再结合上 MarkDown 的优势，一个**轻量、易用、兼容的文档系统** 的构建、维护就很轻松了~
<br></br><?php header('Content-Type: text/html; charset=utf-8'); ?><hr />
<p>title: 【装逼向】如何获得朝鲜IP
date: 2024-05-28 10:04:08
tags: </p>
<ul>
<li>VPN</li>
<li>
<h2>VPN</h2>
</li>
</ul>
<p><strong>本教程引用了其他大佬的博客教程<a href="https://www.nodeseek.com/post-17017-1">nodeseek</a>侵删</strong>
首先推荐一个云服务器平台(菠萝云)<a href="https://globalvm.top/">globalvm</a>【非广告】，这个平台自己已经搭建了
朝鲜和南极洲等地区WARP出口节点，有独立IPv6和共享IPv4，而且一个月只需要5块，<del>算比较贵的了只能玩玩</del>
如果你自己的电脑支持IPv6，那可爽了，如果没有，也可以通过Frp等方式穿透。</p>
<pre><code>朝鲜 VPS 实际位于香港。使用 WARP 获取朝鲜 IPv4。
给了一个朝鲜的 IPv6，用于入口访问，不能用于出口访问。出口只能使用 WARP 的 IPv4。
思路猜测：广播了一个注册在朝鲜的 v6 地址给香港母鸡，然后母鸡套WARP（WARP不是根据VPS实际所在地分配IP的），禁止小鸡IPv6出口访问（防止被IP库识别）。这样在外界看不到 IPv6，可以延长 v6 朝鲜位置的存活时间。可以发现 v6 是 PoloCloud 广播的。</code></pre>
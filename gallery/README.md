禁止鼠标右键：oncontextmenu="return false"；
禁止选择：onselectstart="return false"；

禁止拖放：ondragstart="return false"；

禁止拷贝：oncopy=document.selection.empty() 。

禁止复制：oncopy = "return false"；

禁止保存：<noscript><iframe src="*.htm"></iframe></noscript>，放在head里面。

禁止粘贴：onpaste="return false"

禁止剪贴：oncut = "return false"；

关闭输入法：style="ime-mode:disabled"

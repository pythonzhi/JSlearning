/*
    imqq js文件
*/
// 当点击页面时触发
// document.onclick = function(){
//     // 弹出一个警告对话框
//     alert(document.documentElement.scrollTop)
//     c1.className = c1.dataset.name;
//     c3.className = c3.dataset.name;
// }

// 页面滚动事件

window.onload = function(){
    var lunbonum = 0
    if(document.documentElement.scrollTop > 700){
        topbar.className = 'top' + ' topbar'
    }
    window.onscroll = function(){
        console.log( document.documentElement.scrollTop )
        let num = document.documentElement.scrollTop
        if(num > 700){
            topbar.className = 'top' + ' topbar'
        }else{
            topbar.className = 'topbar'
        }
        if (num > 3491){
            pic1.classList.remove('init');
            pic3.classList.remove('init');
        } else{
            pic1.className = pic1.dataset.name + ' init';
            pic3.className = pic3.dataset.name + ' init';
    }

    // js的属性名中不允许出现-，因此使用驼峰式命名法
    var bg1 = document.getElementById('bg1');
    var bg2 = document.getElementById('bg2');
    var bg3 = document.getElementById('bg3');
    bg1.style.backgroundPositionY = num / 50 + 'px';
    bg2.style.backgroundPositionY = num / 50 + 'px';
    bg3.style.backgroundPositionY = num / 50 + 'px';
    }

    // 轮播图
    var lunbotu = document.querySelectorAll('#banner ul li');
    var lunbobtn = document.querySelectorAll('#banner .lunbo_btn_wrap .lunbo_btn');
    function lunbo(){
        for (var j=0;j<lunbobtn.length;j++){
            lunbobtn[j].className = 'lunbo_btn'
            lunbotu[j].style.display = 'none'
        }
        lunbobtn[lunbonum].className = 'lunbo_btn' + ' on'
        lunbotu[lunbonum].style.display = 'block'
        lunbonum++
        if(lunbonum>1){
            lunbonum = 0
        }
    }
    var timelunbo = setInterval(lunbo, 3000)
    for (var i=0;i<lunbobtn.length;i++){
        lunbobtn[i].index = i;
        lunbobtn[i].onmouseover = function(){
            lunbonum = this.index
            clearInterval(timelunbo)
            lunbo()
            // for (var j=0;j<lunbobtn.length;j++){
            //     lunbobtn[j].className = 'lunbo_btn'
            //     lunbotu[j].style.display = 'none'
            // }
            // this.className = 'lunbo_btn' + ' on'
            // lunbotu[this.index].style.display = 'block'
        };
        lunbobtn[i].onmouseout = function(){
            timelunbo = setInterval(lunbo, 3000)
        }
    }
}

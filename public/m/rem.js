(function (doc, win) {
  var docEl = doc.documentElement,
    // 鎵嬫満鏃嬭浆浜嬩欢,澶ч儴鍒嗘墜鏈烘祻瑙堝櫒閮芥敮鎸� onorientationchange 濡傛灉涓嶆敮鎸侊紝鍙互浣跨敤鍘熷鐨� resize
      resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
      recalc = function () {
        //clientWidth: 鑾峰彇瀵硅薄鍙鍐呭鐨勫搴︼紝涓嶅寘鎷粴鍔ㄦ潯锛屼笉鍖呮嫭杈规
        var clientWidth = docEl.clientWidth;
        if (!clientWidth) return;
        docEl.style.fontSize = 50*(clientWidth / 375) + 'px';
      };
 
  recalc();
  //鍒ゆ柇鏄惁鏀寔鐩戝惉浜嬩欢 锛屼笉鏀寔鍒欏仠姝�
  if (!doc.addEventListener) return;
  //娉ㄥ唽缈昏浆浜嬩欢
  win.addEventListener(resizeEvt, recalc, false);
 
})(document, window);
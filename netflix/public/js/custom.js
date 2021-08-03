document.getElementById('btnSearch').addEventListener('click', onSearchbtnClick);

 function onSearchbtnClick(){
    document.getElementById('txtSearchContainer').style.width='200px';
}

function onBtnNavClick(){
    let size = document.getElementById('sidemenu').clientWidth;
    if(size<100){
        document.getElementById('sidemenu').style.width='350px';
        document.getElementById('sidemenu').style.display='block';
        document.getElementById('navLogo').style.display='none';
    }
    else
    {
        document.getElementById('sidemenu').style.width='0px';
        // document.getElementById('sidemenu').style.display='none';
        document.getElementById('navLogo').style.display='inline-block';

    }
}

function onNotificationClose()
{
    document.getElementById('notificationBlock').style.display='none';
}





/*=======================    MAIN   =========================*/
main{
    position: relative;
    top: 5.4rem;
}

main .container {
    display: grid;
    grid-template-columns: 18vw auto 20vw;
    column-gap: 2rem;
    position: relative;
}

/*========================     LEFT    =========================*/
main .container .left{
    height: max-content;
    position: sticky;
    top: var(--sticky-top-left);
}

main .container .left .profile {
    padding: var(--card-padding);
    background: var(--color-white);
    border-radius: var(--card-border-radius);
    display: flex;
    align-items: center;
    column-gap: 1rem;
    width: 100%;
}

/*-----------------   SIDEBAR   --------------*/
.left .sidebar{
    margin-top: 1rem;
    background: var(--color-white);
    border-radius: var(--card-border-radius);
}

.left .sidebar .menu-item{
    display: flex;
    align-items: center;
    height: 4rem;
    cursor: pointer;
    transition: all 300ms ease;
    position: relative;
}

.left .sidebar .menu-item:hover{
    background: var(--color-light);
}

.left .sidebar i{
    font-size: 1.4rem;
    color: var(--color-gray);
    margin-left: 2rem;
    position: relative;
}

.left .sidebar i .notification-count {
    background: var(--color-danger);
    color: white;
    font-size: 0.7rem;
    width: fit-content;
    border-radius: 0.8rem;
    padding: 0.1rem 0.4rem;
    position: absolute;
    top: -0.2rem;
    right: -0.3rem;
}

.left .sidebar h3{
    margin-left: 1.5rem;
    font-size: 1rem;
}

.left .sidebar .active{
    background: var(--color-light);
}

.left .sidebar .active i,
.left .sidebar .active h3{
    color: var(--color-primary);
}

.left .sidebar .active::before{
    content: "";
    display: block;
    width: 0.5rem;
    height: 100%;
    position: absolute;
    background: var(--color-primary);
}

.left .sidebar .meenu-item:first-child.active{
    border-top-left-radius: var(--card-border-radius);
    overflow: hidden;
}
.left .sidebar .meenu-item:last-child.active{
    border-bottom-left-radius: var(--card-border-radius);
    overflow: hidden;
}

.left .btn {
    margin-top: 1rem;
    width: 100%;
    text-align: center;
    padding: 1rem 0;
}


/*-----------------------------------------  NOTIFICATION POPUP    ----------------------------------------*/
.left .notifications-popup {
    position: absolute;
    top: 0;
    left: 110%;
    width: 30rem;
    background: var(--color-white);
    border-radius: var(--card-border-radius);
    padding: var(--card-padding);
    box-shadow: 0 0 2rem hsl(var(--color-primary), 75%, 60% 25%); 
    z-index: 8;
    display: none;
}

.left .notifications-popup::before{
    content: '';
    width: 1.2rem;
    height: 1.2rem;
    display: block;
    background: var(--color-white);
    position: absolute;
    left: -0.6rem;
    transform: rotate(45deg);
}

.left .notifications-popup > div{
    display: flex;
    align-items: start;
    gap: 1rem;
    margin-bottom: 1rem;
}

.left .notifications-popup small {
    display: block;
}

/*===================================  MIDDLE   ============================*/
.middle .stories {
    display: flex;
    justify-content: space-between;
    height: 12rem;
    gap: 0.5rem;
}

.middle .stories .story {
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    color: white;
    font-size: 0.75rem;
    width: 100%;
    position: relative;
    overflow: hidden;
}

.middle .stories .story::before {
    content: '';
    display: block;
    width: 100%;
    height: 5rem;
    background: linear-gradient(transparent,rgba(0, 0, 0, 0.75));
    position: absolute;
    bottom: 0;
}

.middle .stories .story .name{
    z-index: 2;
}

.middle .stories .story:nth-child(1) {
    background: url("./images/story-1.jpg") no-repeat center center/cover;
}
.middle .stories .story:nth-child(2) {
    background: url("./images/story-2.jpg") no-repeat center center/cover;
}
.middle .stories .story:nth-child(3) {
    background: url("./images/story-3.jpg") no-repeat center center/cover;
}
.middle .stories .story:nth-child(4) {
    background: url("./images/story-4.jpg") no-repeat center center/cover;
}
.middle .stories .story:nth-child(5) {
    background: url("./images/story-5.jpg") no-repeat center center/cover;
}
.middle .stories .story:nth-child(6) {
    background: url("./images/story-6.jpg") no-repeat center center/cover;
}

.middle .story .profile-photo{
    width: 2rem;
    height: 2rem;
    align-self: start;
    border: 3px solid var(--color-primary);
}

/*-------------------- CREATE POST  --------------------*/
.middle .create-post {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 1rem;
    background: var(--color-white);
    padding: 0.4rem var(--card-padding);
    border-radius: var(--border-radius);
}

.middle .create-post input[type="text"] {
    justify-self: start;
    width: 100%;
    padding-left: 1rem;
    background: transparent;
    color: var(--color-dark);
    margin-right: 1rem;
}

/*----------------------------  FEEDS  -------------------------*/
.middle .feeds .feed {
    background: var(--color-white);
    border-radius: var(--card-border-radius);
    padding: var(--card-padding);
    margin: 1rem 0;
    font-size: 0.85rem;
    line-height: 1.5;
}

.middle .feeds .head {
    display: flex;
    justify-content: space-between;
}

.middle .feed .user{
    display: flex;
    gap: 1rem;
}

.middle .feed .photo{
    border-radius: var(--card-border-radius);
    overflow: hidden;
    margin: 0.7rem 0;
}

.middle .feed .action-buttons{
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.4rem;
    margin: 0.6rem;
}

.middle .liked-by {
    display: flex;
}

.middle .liked-by span{
    width: 1.4rem;
    height: 1.4rem;
    display: block;
    border-radius: 50%;
    overflow: hidden;
    border: 2px solid var(--color-white);
    margin-left: -0.6rem;
}

.middle .liked-by span:first-child {
    margin: 0;
}

.middle .liked-by p {
    margin-left: 0.5rem;
}

/*==================================   RIGHT  ========================*/
.main .container .right {
    height: max-content;
    position: sticky;
    top: var(--sticky-top-right);
    bottom: 0;
}

.right .messages {
    background: var(--color-white);
    border-radius: var(--card-border-radius);
    padding: var(--card-padding);
}

.right .messages .heading {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.right .messages {
    font-size: 1.4rem;
}

.right .messages .search-bar{
    display: flex;
    margin-bottom: 1rem;
}

.right .messages .category {
    display: flex;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.right .messages .category h6{
    width: 100%;
    text-align: center;
    border-bottom: 4px solid var(--color-light);
    padding-bottom: 0.5rem;
    font-size: 0.85rem;
}

.right .messages .category .active {
    border-color: var(--color-dark);
}

.right .messages .message-requests{
    color: var(--color-primary);
}

.right .messages .message {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
    align-items: start; 
}

.right .message .profile-photo{
    position: relative;
    overflow: visible;
}

.right .profile-photo img{
    border-radius: 50%;
}

.right .messages .message:last-child {
    margin: 0;
}

.right .messages .message p{
    font-size: 0.8rem;
}

.right .messages .message .profile-photo .active {
    width: 0.8rem;
    height: 0.8rem;
    border-radius: 50%;
    border: 3px solid var(--color-white);
    background: var(--color-success);
    position: absolute;
    bottom: 0;
    right: 0;
}

/*============================   FRIEND REQUESTS   ====================*/
.right .friend-requests {
    margin-top: 1rem;
}

.right .friend-requests h4 {
    color: var(--color-gray);
    margin-bottom: 1rem 0;
}

.right .request {
    background: var(--color-white);
    padding: var(--card-padding);
    border-radius: var(--card-border-radius);
    margin-bottom: 0.7rem;
}

.right .request .info {
    display: flex;
    gap: 1rem;
    margin-bottom: 1rem;
}

.right .request .action {
    display: flex;
    gap: 1rem;
}

/* ==========================  THEME CUSTOMIZATION  ========================*/
.customize-theme {
    background: rgba(255, 255, 255, 0.5);
    width: 100vw;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    text-align: center;
    display: grid;
    place-items: center;
    font-size: 0.9rem;
    display: none;
}

.customize-theme .card {
    background: var(--color-white);
    padding: 3rem;
    border-radius: var(--card-border-radius);
    width: 50%;
    box-shadow: 0 0 1rem var(--color-primary);
}

/*-----------------------  FONT SIZES -------------------*/
.customize-theme .font-size {
    margin-top: 5rem;
}

.customize-theme .font-size > div {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: var(--color-light);
    padding: var(--search-padding);
    border-radius: var(--card-border-radius);
}

.customize-theme .choose-size {
    background: var(--color-secondary);
    height: 0.3rem;
    width: 100%;
    margin: 0 1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.customize-theme .choose-size span {
    width: 1rem;
    height: 1rem;
    background: var(--color-secondary);
    border-radius: 50%;
    cursor: pointer;
}

.customize-theme .choose-size span.active{
    background: var(--color-primary);
}

/*---------------------------  FONT SIZES  --------------------------*/
.customize-theme .color{
    margin-top: 2rem;
}

.customize-theme .choose-color{
    background: var(--color-light);
    padding: var(--search-padding);
    border-radius: var(--card-border-radius);
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.customize-theme .choose-color span {
    width: 2.2rem;
    height: 2.2rem;
    border-radius: 50%;
}

.customize-theme .choose-color span:nth-child(1) {
    background: hsl(252, 75%, 60%);
}
.customize-theme .choose-color span:nth-child(2) {
    background: hsl(52, 75%, 60%);
}
.customize-theme .choose-color span:nth-child(3) {
    background: hsl(352, 75%, 60%);
}
.customize-theme .choose-color span:nth-child(4) {
    background: hsl(152, 75%, 60%);
}
.customize-theme .choose-color span:nth-child(5) {
    background: hsl(202, 75%, 60%);
}

.customize-theme .choose-color span.active{
    border: 5px solid white;
}

/*------------------- BACKGROUND ----------------*/
.customize-theme .background {
    margin-top: 2rem;
}

.customize-theme .choose-bg{
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
}

.customize-theme .choose-bg > div {
    padding: var(--card-padding);
    width: 100%;
    display: flex;
    align-items: center;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 0.4rem;
    cursor: pointer;
}

.customize-theme .choose-bg > div.active{
    border: 2px solid var(--color-primary);
}

.customize-theme .choose-bg .bg-1 {
    background: white;
    color: black;
}

.customize-theme .choose-bg .bg-2 {
    background: hsl(252, 30%, 17%);
    color: white;
}

.customize-theme .choose-bg .bg-3 {
    background: hsl(252, 30%, 10%);
    color: white;
}

.customize-theme .choose-bg > div span {
    width: 2rem;
    height: 2rem;
    border: 2px solid var(--color-gray);
    border-radius: 50%;
    margin-right: 1rem;
}

/* ========================= MEDIA QUERIES FOR SMALL LAPTOPS AND BIG TABLETS   =========================*/
@media screen and (max-width: 1200px){
    .container {
        width: 96%;
 }

 main .container {
    grid-template-columns: 5rem auto 30vw;
    gap : 1rem;
 }

 .left {
    width: 5rem;
    z-index: 5;
 }

 main .container .left .profile {
    display: none;
 }

 .sidebar h3 {
    display: none;
 }

 .left .btn {
    display: none;
 }

 .customize-theme .card{
    width: 80vw;
 }
}

/* =====================   MEDIA QUERIES FOR SMALL TABLETS AND MOBILE PHONES ====================*/
@media screen and (max-width: 992px){
    nav .search-bar {
        display: none;
    }

    main .container {
        grid-template-columns: 0 auto 5rem;
    }
    main .container .left {
        grid-column: 3/4;
        position: fixed;
        bottom: 0;
        right: 0;
    }
    /*--------------- NOTIFICATION POPUP -------------------*/
    .left .notifications-popup {
        position: absolute;
        left: -20rem;
        width: 20rem;
    }

    .left .notifications-popup::before {
        display: absolute;
        top: 1.3rem;
        left: calc(20rem - 0.6rem);
        display: block;
    }

    main .container .left .sidebar > div h3 {
        display: none;
    }

    main .container .middle {
        grid-column: 1/3;
    }

    main .container .right {
        display: none;
    }

    .customize-theme .card{
        width: 92vw;
    }
}

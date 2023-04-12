<?php
include_once("ketnoi.php");
?>
<style>
    .tabs {
        display: flex;
        position: relative;
        background-color: #fffbf8;
    }

    .tabs .line {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        border-radius: 5px;
        background-color: #ee4d2d;
        transition: all 0.2s ease;
    }

    .tab-item {
        min-width: 80px;
        padding: 10px 28px;
        font-size: 16px;
        text-align: center;
        color: black;
        background-color: #fffbf8;
        border-top-left-radius: 2px;
        border-top-right-radius: 2px;
        border-bottom: 2px solid transparent;
        opacity: 0.6;
        cursor: pointer;
        transition: all 0.5s ease;
    }

    .tab-item:hover {
        opacity: 1;
        background-color: rgba(194, 53, 100, 0.05);
        border-color: rgba(194, 53, 100, 0.1);
    }

    .tab-item.active {
        opacity: 1;
    }

    .tab-content {
        padding: 28px 0;
    }

    .tab-pane {
        color: #333;
        display: none;
    }

    .tab-pane.active {
        display: block;
    }

    .bill-search {
        width: 100%;
        height: 50px;
        background: rgba(241, 219, 219, 0.2);
    }

    .bill-search form {
        width: 60%;
        right: 0;
        margin: auto;
    }

    .bill-search form input[type="search"] {
        border: none;
        outline: none;
        font-size: 16px;
        width: 100%;
        position: relative;
    }

    .bill-search form input[type="submit"] {
        position: absolute;
        background: #fff;
        right: 0;
        top: 0;
        color: black;
        font-size: 16px;
        font-weight: bold;
        margin: 0;
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        height: 40px;
    }
</style>
<div class="bill">
    <div class="bill-main">
        <div class="bill__tt">
            <div class="tabs">
                <div class="tab-item active">
                    <p>Tất cả</p>
                </div>
                <div class="tab-item">
                    <p>Chờ thanh toán</p>
                </div>
                <div class="tab-item">
                    <p>Vận chuyển</p>
                </div>
                <div class="tab-item">
                    <p>Đang giao</p>
                </div>
                <div class="tab-item">
                    <p>Hoàn thành</p>
                </div>
                <div class="tab-item">
                    <p>Đã hủy/Hoàn tiền</p>
                </div>
                <div class="tab-item">
                    <p>Đánh giá</p>
                </div>
                <div class="line"></div>
            </div>
        </div>
        <div class="bill-search">
            <form action="" method="post">
                <input type="search" placeholder="Nhập đơn hàng theo mã đơn hàng cần tìm kiếm ?" name="search">
                <input type="submit" value="Tìm kiếm" name="submit">
            </form>
        </div>
        <div class="bill-content">
            <div class="tab-pane active">1</div>
            <div class="tab-pane">2</div>
            <div class="tab-pane">3</div>
            <div class="tab-pane">4</div>
            <div class="tab-pane">5</div>
            <div class="tab-pane">6</div>
            <div class="tab-pane">7</div>
        </div>
    </div>
</div>
<script>
    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    const tabs = $$(".tab-item");
    const panes = $$(".tab-pane");

    const tabActive = $(".tab-item.active");
    const line = $(".tabs .line");

    requestIdleCallback(function() {
        line.style.left = tabActive.offsetLeft + "px";
        line.style.width = tabActive.offsetWidth + "px";
    });

    tabs.forEach((tab, index) => {
        const pane = panes[index];

        tab.onclick = function() {
            $(".tab-item.active").classList.remove("active");
            $(".tab-pane.active").classList.remove("active");

            line.style.left = this.offsetLeft + "px";
            line.style.width = this.offsetWidth + "px";

            this.classList.add("active");
            pane.classList.add("active");
        };
    });
</script>
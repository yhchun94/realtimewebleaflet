<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="swipe.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>Real Time Web Leaflet</title>
</head>

<style>
    a { text-decoration:none !important }
    a:hover { text-decoration:none !important }

    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 600px;
        width: auto;
        padding: 70px 0px 0px 0px;
    }

    .image {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 200px;
        width: 470px;
        padding: 0px 0px 0px 0px;
    }

    .image_list {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 100px;
        width: 150px;
        margin: 17px 0px 10px 0px;
    }
</style>

<body style="background-color: #fff;">

  <section data-role="page" id="swipeflick" class="eventPage" data-next="" data-prev="index" data-dom-cache="true" style="background-color: #fff;">
    <header class="blog-header py-1" style="background-color: #fff; border-bottom: 1px solid #bbb;">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1 pl-5">
          <a class="text-muted" href="/index.html"><i class="bi bi-chevron-left"></i></a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="/index.html">작품정보</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center"></div>
      </div>
    </header>
    <div class="container pt-4" style="background-color: #fff;">
        <div>
          <p>히토 슈타이얼 - 데이터의 바다 <br/> 2022.04.29~2022.09.18</p>
          <img src="img_6.png" alt="image" class="image">
        </div>
        <div class="text-center mt-3 p-1" style="background-color: rgb(236, 236, 236)">3, 4 전시실</div>
        
        <div style="height: 120px" data-toggle="modal" data-target="#modal_1">
          <div style="float:left; width: 30%;">
            <img src="img_1.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 30px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">1. 미션완료 : 벨린시지</div>
              <div class="mt-3 text-right" style="flex: 1;">23:15 / 47:23</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr />

        <div style="height: 120px">
          <div style="float:left; width: 30%;">
            <img src="img_2.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 30px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">2. 소셜심</div>
              <div class="mt-3 text-right" style="flex: 1;">16:00 / 18:19</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 120px">
          <div style="float:left; width: 30%;">
            <img src="img_3.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 30px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">3. 태양의 공장</div>
              <div class="mt-3 text-right" style="flex: 1;">06:10 / 23:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 120px">
          <div style="float:left; width: 30%;">
            <img src="img_4.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 30px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">4. 야성적 충동</div>
              <div class="mt-3 text-right" style="flex: 1;">12:10 / 24:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 120px">
          <div style="float:left; width: 30%;">
            <img src="img_5.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 30px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">5. 이것이 미래다</div>
              <div class="mt-3 text-right" style="flex: 1;">02:45 / 16:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 120px">
          <div style="float:left; width: 30%;">
            <img src="img_6.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 30px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">6. 깨지지 않은 창문들</div>
              <div class="mt-3 text-right" style="flex: 1;">09:03 / 10:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div>

        <div class="text-center mt-3 p-1" style="background-color: rgb(236, 236, 236)">프로젝트 갤러리</div>

        <div style="height: 120px">
          <div style="float:left; width: 30%;">
            <img src="img_1.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 20px 0px 10px 0px; width: 70%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 2 1; width: 100px;">7. 안 보여주기: 빌어먹게 유익하고 교육적인.MOV파일</div>
              <div class="mt-3 text-right" style="flex: 1;">05:00 / 15:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-3" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div>
    </div>
  </section>



          <!-- Modal -->
          <div class="modal fade" id="modal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  - 01 미션 완료 : 벨란시지
      
      미션 완료: 벨란시지는 히토 슈타이얼과 조르지 가고
      
      가고시츠, 밀로스 트라길로비치가 공동으로 저술, 제작한
      
      렉처퍼포먼스 영상이다. 명품 브랜드 발렌시아가를 중심으로 1989년 베를린 장벽이 무너진 후 도널드 트럼프 당선까지의 약 30년 동안의 정치, 사회, 문화 변동을
      
      고찰한 작품이다. 여기서 패션 브랜드 발렌시아가는 유럽의
      
      국가사회주의 붕괴와 사유시장 이데올로기, 포퓰리즘,
      
      소설 네트워크 시대를 반영하며 변화를 거듭하고 동유럽과
      
      서유럽, 정치권과 패션계를 넘나드는 하나의 패션 데이터로
      
      작동한다.
      <br />
      슈타이일이 사용한 용어 "벨란시지"는 발렌시아가
      방식'을 뜻하는 것이다. 즉 실제 상품이 아니라 소셜
      
      미디어에서 만들어지고 업로드되고 공유되며 일종의
      
      '무기화된 데이터 알고리즘'으로 순환하면서 정치, 대중문화,
      
      경제의 영역까지 그 영향력을 행사하는 패션 데이터의
      
      독특한 파급 현상을 일컫는다. 벨란시지는 초거대 닷컴
      
      기업과 다국적 자본주의의 온라인 쇼케이스를 통해 정보의
      
      영역으로 확장된다. 실제로 발렌시아가 수석디자이너인
      
      뎀나 바잘리아가 만든 패션브랜드 '베트멍은 소셜
      
      네트워크에서 믿을 미끼로 쓰는 전략으로 만들어졌다.
      
      패션 데이터는 때로는 무기화된 문화적 내러티브로서 선거
      
      등에 정치적으로 활용되기도 한다.
      
      히토 슈타이얼, 조르지 가고 가고시츠, 밀로스 트라킬로비치
      
      *(줄 바꾸기)*
      미션 완료: 벨란시지, 2019
      3채널 HD 비디오, 컬러, 사운드, 47분 23초
      히토 슈타이얼, 조르지 가고 가고시츠, 밀로스 트라킬로비치 제공


                </div>
              </div>
            </div>
          </div>

    


  <script>
      jQuery.noConflict();
  </script>

</body>
</html>
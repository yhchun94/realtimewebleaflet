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
        width: 350px;
        padding: 0px 0px 0px 0px;
    }

    .image_list {
        display: block;
        margin-left: auto;
        margin-right: auto;
        height: 70px;
        width: 100px;
        margin: 17px 0px 10px 0px;
    }

    .modal.modal-center {
      text-align: center;
    }

    .modal-dialog.modal-center {
      display: inline-block;
      text-align: left;
      vertical-align: middle;
    }

    
    @keyframes run {
      from {
        width: 0px;
      }
      to {
        width: 100%;
      }
    }
    .bar1 {
      width: 0px;
      height: 10px; 
      background-color: rgb(179, 255, 0);
    }
    .barr1 {
      animation-name: run;
      animation-duration: 2843s;
      animation-delay: 0s;
      animation-fill-mode: forwards;
      animation-iteration-count: infinite;
    }

    .bar2 {
      width: 0px;
      height: 10px; 
      background-color: rgb(179, 255, 0);
    }
    .barr2 {
      animation-name: run;
      animation-duration: 1099s;
      animation-delay: 5s;
      animation-fill-mode: forwards;
      animation-iteration-count: infinite;
    }
</style>

<body style="background-color: #fff;">

  <section data-role="page" id="swipeflick" class="eventPage" data-next="" data-prev="index" data-dom-cache="true" style="background-color: #fff;">
    <header class="blog-header py-1" style="background-color: #fff; border-bottom: 1px solid #bbb;">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1 pl-5">
          <a class="text-muted" href="/index.php"><i class="bi bi-chevron-left"></i></a>
        </div>
        <div class="col-4 text-center">
          <a class="blog-header-logo text-dark" href="/index.php">작품정보</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center"></div>
      </div>
    </header>
    <div class="container pt-4" style="background-color: #fff;">
        <div>
          <p>히토 슈타이얼 - 데이터의 바다 <br/> 2022.04.29~2022.09.18</p>
          <img src="img_0.png" alt="image" class="image">
        </div>
        <div class="text-center mt-3 p-1" style="background-color: rgb(236, 236, 236)">3, 4 전시실</div>
        
        <div style="height: 100px" data-toggle="modal" data-target="#modal_1">
          <div style="float:left; width: 25%;">
            <img src="img_1.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 10px 0px 0px 0px; width: 75%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">1. 미션완료 : 벨린시지</div>
              <div class="mt-3 text-right" style="flex: 1;">
                <span id="timing1">00:00</span> / <span>47:23</span>
              </div>
            </div>
            <div style="display: flex; background-color: rgb(195, 195, 195); height: 10px;">
              <div class="bar1 barr1"></div>
            </div>
          </div>
        </div><hr />

        <div style="height: 100px" data-toggle="modal" data-target="#modal_2">
          <div style="float:left; width: 25%;">
            <img src="img_2.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 10px 0px 0px 0px; width: 75%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">2. 소셜심</div>
              <div class="mt-3 text-right" style="flex: 1;">
                <span id="timing2">00:00</span> / <span>18:19</span>
              </div>
            </div>
            <div style="display: flex; background-color: rgb(195, 195, 195); height: 10px;">
              <div class="bar2 barr2"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 100px" data-toggle="modal" data-target="#modal_3">
          <div style="float:left; width: 25%;">
            <img src="img_3.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 10px 0px 0px 0px; width: 75%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">3. 태양의 공장</div>
              <div class="mt-3 text-right" style="flex: 1;">06:10 / 23:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-1" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-1" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 100px" data-toggle="modal" data-target="#modal_4">
          <div style="float:left; width: 25%;">
            <img src="img_4.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 10px 0px 0px 0px; width: 75%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">4. 야성적 충동</div>
              <div class="mt-3 text-right" style="flex: 1;">12:10 / 24:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-1" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-1" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div style="height: 100px" data-toggle="modal" data-target="#modal_5">
          <div style="float:left; width: 25%;">
            <img src="img_5.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 10px 0px 0px 0px; width: 75%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-3" style="flex: 1;">5. 이것이 미래다</div>
              <div class="mt-3 text-right" style="flex: 1;">02:45 / 16:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-1" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-1" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div><hr>

        <div class="text-center mt-3 p-1" style="background-color: rgb(236, 236, 236)">프로젝트 갤러리</div>

        <div style="height: 100px" data-toggle="modal" data-target="#modal_6">
          <div style="float:left; width: 25%;">
            <img src="img_6.png" alt="image" class="image_list">
          </div>
          <div style="float:left; margin: 10px 0px 0px 0px; width: 75%;" class="pl-4">
            <div style="display: flex;">
              <div class="mt-1" style="flex: 2 1;">6. 안 보여주기: 빌어먹게 유익하고 교육적인.MOV파일</div>
              <div class="mt-1 text-right" style="flex: 1;">09:03 / 10:00</div>
            </div>
            <div style="display: flex;">
              <div class="mt-1" style="flex: 1; width: 90px; height: 10px; background-color: rgb(179, 255, 0);"></div>
              <div class="mt-1" style="flex: 1; width: 10px; height: 10px; background-color: rgb(195, 195, 195);"></div>
            </div>
          </div>
        </div>

        

    </div>
  </section>



          <!-- Modal -->
          <div class="modal modal-center fade" id="modal_1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-center" style="width: 350px; margin: 30px 0px;">
              <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-body">
                  &lt;미션 완료: 벨란시지&gt;는 히토 슈타이얼과 조르지 가고 가고시츠, 밀로스 트라길로비치가 공동으로 저술, 제작한 렉처퍼포먼스 영상이다. 명품 브랜드 발렌시아가를 중심으로 1989년 베를린 장벽이 무너진 후 도널드 트럼프 당선까지의 약 30년 동안의 정치, 사회, 문화 변동을 고찰한 작품이다. 여기서 패션 브랜드 발렌시아가는 유럽의 국가사회주의 붕괴와 사유시장 이데올로기, 포퓰리즘, 소설 네트워크 시대를 반영하며 변화를 거듭하고 동유럽과 서유럽, 정치권과 패션계를 넘나드는 하나의 패션 데이터로 작동한다.
                  <br/>
                  슈타이일이 사용한 용어 "벨란시지"는 발렌시아가 방식'을 뜻하는 것이다. 즉 실제 상품이 아니라 소셜 미디어에서 만들어지고 업로드되고 공유되며 일종의 '무기화된 데이터 알고리즘'으로 순환하면서 정치, 대중문화, 경제의 영역까지 그 영향력을 행사하는 패션 데이터의 독특한 파급 현상을 일컫는다. 벨란시지는 초거대 닷컴 기업과 다국적 자본주의의 온라인 쇼케이스를 통해 정보의 영역으로 확장된다. 실제로 발렌시아가 수석디자이너인 뎀나 바잘리아가 만든 패션브랜드 '베트멍은 소셜 네트워크에서 믿을 미끼로 쓰는 전략으로 만들어졌다. 패션 데이터는 때로는 무기화된 문화적 내러티브로서 선거 등에 정치적으로 활용되기도 한다. 히토 슈타이얼, 조르지 가고 가고시츠, 밀로스 트라킬로비치
                  <br/> <br/> <br/>
                  &lt;미션 완료: 벨란시지 &gt;, 2019 3채널 HD 비디오, 컬러, 사운드, 47분 23초 히토 슈타이얼, 조르지 가고 가고시츠, 밀로스 트라킬로비치 제공
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-center fade" id="modal_2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-center" style="width: 350px; margin: 30px 0px;">
              <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-body">
                  &lt;소셜심&gt;은 온라인을 기반으로 한 시뮬레이션 가상공간이 현실세계를 더욱 적극적으로 대체하기 시작한 팬데믹 기간 동안 혼란스러운 사회 상황과 예술 창작의 조건 변화하는 동시대미술관의 위상을 탐구한 5채널 영상 작품이다. 작품의 제목이기도 한소설 시뮬레이션은 인간의 상호작용을 단순화한 모델이다. 긴급대피 시나리오를 가상으로 실험하기 위해 아바타나 비디오 게임의 형식을 빌어 작은 출입구를 통과하는 인물들의 행동을 연구하는 것 등이 소셜 시뮬레이션의 대표적인 예이다. 총 5채널 영상으로 구성된 &lt;소셜심&gt;의 첫 번째 방에는 쉬지 않고 춤을 추는 경찰 아바타가 4채널에 등장하는데, 그들의 춤은 팬데믹 이후 퍼지기 시작한 대중들의 시위와 이를 진압하는 경찰 및 군인들의 행위를 번안한 일종의 사회적 안무이다. 이들의 신체 움직임은 2020년 팬데믹 기간 중 일어난 시위 현장의 사망자, 부상자, 실종자 수와 같은 데이터의 추이와 인공지능의 논평에 따라 달라진다.
                  <br/>
                  슈타이얻은 이러한 사회적 안무를 11세기 베른부르크에서 부터 14세기 후반이헨, 쾰른, 스트라스부르 등을 거쳐 제1차세계대전 후 베를린에서 일어났던 댄싱 마니아(무광)와 연결시킨다. 과거부터 현재까지 전쟁, 전염병, 혁명 후 모든 사람들이 원하는 건 춤추는 것이었다.
                  <br/>
                  &lt;소셜심&gt;의 두 번째 방에는 레오나르도다빈치가 그린 것으로 짐작되는 도난작품 &lt;살바도르 문디&gt;를 찾는 테스크포스를 중심으로 한 싱글채널 영상작품이 전시된다. 여기서 &lt;살바도르 문디&gt;는 인공지능이 다스리는 자유무역함으로 끌려가는 '실제'에 접근하기 어려운 시뮬레이션된
                  미술로 등장한다. 또한 슈타이얼은 "인공 우둔함이라는 용어로 팬데믹 시기에 더욱 자동화되고 폐쇄되고, 가상현실 지도로 대체된 미술관에 대해 비판적 논평을 제시한다. 아울러 영상에 등장하는, 스스로 진화하는 자동화 예술이자 알고리즘 추상, 즉 소셜심즈는 암호화폐가 그렇듯 그 가치를 보증할 수 없다.
                  <br/> <br/> <br/>
                  &lt;소셜심&gt;, 2020
                  단채널 HD 비디오, 컬러, 사운드, 18분 19호
                  라이브 컴퓨터 시뮬레이션 댄싱 마니아, 가변 시간
                  작가, 앤드류 크랩스 갤러리, 뉴욕 및 에스더 쉬퍼, 베를린 제공  
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-center fade" id="modal_3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-center" style="width: 350px; margin: 30px 0px;">
              <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-body">
                  &lt;태양의 공장&gt;은 현실세계의 육체노동이 데이터 노동으로 치환되는 데이터 사회의 세계상을 담고 있다. 작품의 제목 '태양의 공장은 이 영상의 주인공이자 내레이터인 율리아가 모션 캡처 스튜디오에서 제작하고 있는 게임의 이름이다. 영상에 등장하는 인물들은 모두 스튜디오 노동자들로, 강요당한 그들의 춤 동작은 모션 캡처 수트에 부착된 센서를 통해 컴퓨터로 캡처되고 네이터로 전환되어 게임과 애니메이션 등에 활용된다. 대표적인 인물이 바로 자신의 댄스 영상을 유튜브에 올려 스타가 된 율리아의 동생이다. 영상에서 그의 춤은 포사이스, 스트리트파이터 가일, 오드도 등의 캐릭터로 전환되었고 유튜브가상세계에서 '데이터 이미지'로서 폭발적으로 순환되었다.
                  <br/>
                  이것은 게임이 아니다. 이것은 현실이다'라는 영상 속의 대사처럼 데이터 공간은 노동, 경제, 환경, 정치음 둘러싼 현실상을 대체하는 내리물이 아니라 이제 현실 그 자체가 되었다. 데이터를 종합하고 배열하여 알고리즘적으로 정치적 메시지를 생산하는 봇 뉴스가 활동하는 세계에서, 유리섬유 케이블로 공급되는 전자기적 주파수를 통해 감청기지를 세워 국가 사이의 정치적 감시 작동시키는 지리정치학적 공간에서, 페이스북 군대, 디지털 용병이 활발하게 활동하는지대에서 이러한 데이터 기반의 가상세계는 현실공간을 근본적으로 재구성한다.
                  <br/> <br/> <br/>
                  &lt;태양의 공장&gt;, 2015
                  단채널 HD 비디오 설치, 컬러, 사운드, 발광 LED 그리드, 의자, 23분
                  작가, 앤드류 크랩스 갤러리, 뉴욕 및 에스더 쉬퍼, 베를린 제공
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-center fade" id="modal_4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-center" style="width: 350px; margin: 30px 0px;">
              <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-body">
                  &lt;야성적 충동&gt;은 총 4채널 비디오 설치로 구성되어 있다. 단채널 내러티브 비디오는 양치기의 이야기를 담고 있으며, 3채널 영상은 두수 센서가 감지한 식물 환경의 변화하는 상태를 기반으로 한다. 그리고 이러한 정보는 라이브 인터랙티브 시뮬레이션을 통해 기록되어 영상으로 전환된다. 내러티브 채널 영상은 한TV 프로그램이 양치기 리얼리티 TV쇼를 제작하기 위해 스페인의 작은 산골마을에 들어오는 이야기에서 시작한다. 이 TV 쇼는 이내 팬데믹 때문에 중단되고 프로그램 제작자들은 대신 “크립토 콜로세움”이라 불리는 동굴 전투 메타버스를 제작한다. 그러나 현지 양치기들은 리얼리티 TV 쇼가 NFT 적자생존 경쟁으로 확대되는 이러한 상황에 맞서 싸운다. 그들은 구석기 벽화가 그려진 신비로운 동굴을 중심으로 양치기들만이 가지고 있는 사회적이고 생물학적인 이종간 상호교류의 힘을 불러온다. 여기에는 박테리아를 기반으로 한 블록체인에 코드화되어 있는 치즈코인" 제작 과정 등이 포함된다.
                  <br/>
                  이 작품의 제목은 영상 서두에 등장하는 영국의 경제학자 존 메이너드 케인스가 193 년에 언급한 바 있는 "야성적 충동에서 인용한 것이다. “야성적 충동"이란 시장이 통제불능 상태가 되고 미친 듯이 날뛰는 상황을 야기한 인간의 탐욕이나 야망, 두려움과 같은 심리적이고 감정적인 요소를 일컫는다. 이는 실업과 인플레이션을 초래하는 주된 원인이 되기도 하는데, 작가는 최근 국립현대미술관 커미션 신작 <야성적 충동>에서 케인스를 경유하며 오늘날 비트코인, NFT 등과 연동된 야생 자본주의 시장을 언급한다.
                  <br/><br/> <br/>
                  &lt;야성적 충동&gt;, 2022
                  단채널 HD 비디오, 컬러, 사운드, 24분
                  라이브 컴퓨터 시뮬레이션, 가변 시간
                  작가, 앤드류 크랩스 갤러리, 뉴욕 및 에스더 쉬퍼, 베를린 제공
                  국립현대미술관 제작 지원
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-center fade" id="modal_5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-center" style="width: 350px; margin: 30px 0px;">
              <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-body">
                  &lt;이것이 미래다&gt;는 신경 네트워크와 인공지능이 예견한 미래 정원에 관한 이야기이다. 신경 네트워크가 들려주는 내러티브를 중심으로 전개되는 싱글채널 영상 &lt;이것이 미래다&gt;와 LED 스크린이 장착된 스커폴딩 구스물의 &lt;피워 플랜 &gt;로 구성되어 있다. 싱글채널 영상 &lt;이것이 미래다&gt;에는 예측 알고리즘에 의해 감옥으로 간 쿠르드족 여인 헤자(Hêja)가 주인공으로 등장한다. 감옥 앞마당에서 날딘 씨앗을 잡아 종이 위에 싹을 틔웠으나 교도관들은 꽃을 발견한 후 모두 없애버렸고, 이후 신경 네트워크는 미래에 꽃을 되찾을 수 있을 거라 예측한다. 헤자는 미래 정원에 꽃을 숨긴 후 신경 네트워크에 의해 재생된 꽃과 나무를 다시 찾아낸다. 미래 정원의 식물들은 SNS 중독으로 뇌가 병든 사람을 치유하거나, 혐오와 선동에 눈감하게 하거나, 독재자를 독살하기도 하는 등의 마술적인 사유의 힘을 가지고 있다.
                  <br/>
                  한편으로 이 작품은 미래를 예측하려 애쓰면서도 현재를 바라보지 못하는 인공지능의 우둔함을 꼬집고, 교통상황과 신용등급뿐 아니라 반란, 자살률, 수명까지 예견하려는 예측알고리즘의 신뢰성에 회의 표명한다. 두 번째 방에 구성된 &lt;피워 플랜츠&gt;의 연속적으로 변형하는 만화경과 같은 컬러풀한 식물 이미지는 바로 인공지능과 예측알고리즘 미래에 프로그래밍에 의해 재생된 꽃과 나무이다. 그 꽃들은 0.04초 후에 자신의 미래를 예측한다. 플랜드는 식물과 공장이라는 이중적 의미를 가진다. 이는 오늘날 우리 삶에 영향을 미치는 두 가지 생산적인 힘, 즉 디지털 기술과 생태적 가치 양자와 관련이 있는 듯 보인다.
                  <br/><br/> <br/>
                  &lt;이것이 미래다&gt;, 2019
                  비디오 설치
                  <이것이 미래다>, 2019, 단채널 HD 비디오, 컬러, 사운드, 스마트 스크린, 16분
                  <파워 플랜츠>, 2019, 스테인리스스틸 비계 구조물,
                  LED 패널, 다채널 비디오, 컬러, 무음, 반복 재생,
                  LED 텍스트 패널, 텍스트 비디오, 컬러, 무음, 반복 재생, 가변 크기
                  울산시립미술관 소장
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-center fade" id="modal_6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-center" style="width: 350px; margin: 30px 0px;">
              <div class="modal-content" style="border-radius: 20px;">
                <div class="modal-body">
                  슈타이얼은 &lt;안 보여주기 : 빌어먹게 유익하고 교육적인 .MOV 파일&gt;에서 5장으로 구성된 게릴라 매뉴얼의 형식을 빌려 디지털 기반의 감시 사회 속에서 우리가 가시성의 장에서 '안보일 수 있는 방법을 다섯 가지로 설명한다. 카메라에 안 보이게 하는 방법, 시아에서 안보이게 하는 방법, 이미지가 되는 방법, 사라짐으로써 안 보이게 되는 방법, 이미지로 만들어진 세계에 병합님으로써 안보이게 되는 방법 등이 바로 그것이다. 1970년대 영국의 전설적인 코미디 시리즈 몬티 파이튼의 '비행 서거스」 중 동명의 에피소드에서 제목 '안 보여주기' 를 인용하였다. 해서 작품 전세에는 디지털 시각 체제를 둘러싼 날카로운 통찰과 유머가 공존한다. 1장 카메라에 안 보이게 하는 방법에서는 해상도 평가표적이 등장한다. 디지털 기술 기반 세상에서는 해상도가 가시성을 결정한다. 또한 작가가 3D 통치술이라 명명한 구글맵과 드론 등의 수직 조망은 판옵티콘의 지배환상을 내면화하고 디지털 기술을 이용한 감시를 암시한다.
                  <br/>
                  4장 사라짐으로써 안 보이게 되는 방법으로 불량 화소 되기, 무등록자 되기, 필터에 걸린 스팸 되기, 국가의 적으로서 실종자 되기, 은폐되기 등이 언급된다. 디지털 혁명 시대에 17만 명이 사라지며 그들은 삭제되고 생략되고 격리되고 말살된다. 잡음과 신호를 구별하는 정치적 알고리즘에 의해 보이는 것과 보이지 않는 것의 위계가 결정되기도 한다. 이러한 데이터 알고리즘의 세계에서 소외된 존재는 디지털 이미지의 위상에서 눈에 띄지 않는 이미지 스팸, 즉 작가가 강조하는 "빈곤한 이미지”와도 같다.
                  <br/><br/> <br/>
                  &lt;안 보여주기 : 빌어먹게 유익하고 교육적인 .MOV 파일&gt;, 2013
                  단채널 
                </div>
              </div>
            </div>
          </div>

          

    
  <script>
    var cnt1 = 0;
    var cnt2 = 0;

      // 1
      countUp1();
      up1 = setInterval(countUp1, 1000);
      function countUp1() {
          cnt1++;
          if (cnt1 > 2843) { clearInterval(up1); } // 47:23 을 초로 변환 시 2843
          if (cnt1 == 2843+1) { cnt1 = 0; setInterval(countUp1, 1000); } // 2843+1 = 2844초가 되었을 때 초기화
          time1(cnt1);
      }
      function time1(seconds) {
        var min = parseInt((seconds%3600)/60) < 10 ? '0'+ parseInt((seconds%3600)/60) : parseInt((seconds%3600)/60);
        var sec = seconds % 60 < 10 ? '0'+seconds % 60 : seconds % 60;
        document.getElementById("timing1").innerHTML = min+":" + sec;
      }
  
      // 2
      setTimeout(function(){
        countUp2();
        up2 = setInterval(countUp2, 1000);
        function countUp2() {
            cnt2++;
            if (cnt2 > 1099) { clearInterval(up2); } // 18:19 을 초로 변환 시 1099
            if (cnt2 == 1099+1) { cnt2 = 0; setInterval(countUp2, 1000); } // 1099+1 = 1100초가 되었을 때 초기화
            time2(cnt2);
        }
        function time2(seconds) {
          var min = parseInt((seconds%3600)/60) < 10 ? '0'+ parseInt((seconds%3600)/60) : parseInt((seconds%3600)/60);
          var sec = seconds % 60 < 10 ? '0'+seconds % 60 : seconds % 60;
          document.getElementById("timing2").innerHTML = min+":" + sec;
        }
      }, 5000); // 5000 = 5초 지연
    



    
  </script>

  <script>
      jQuery.noConflict();
  </script>

  
</body>
</html>
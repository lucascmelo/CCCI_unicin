<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-dashboard fa-fw"></i> Dashboard</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-users fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?php echo count_users()['total_users']; ?></div>
                <div>Voluntários</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-file-text fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?php echo wp_count_posts('documentos')->publish; ?></div>
                <div>Documentos</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-archive fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?php echo wp_count_terms('arquivos'); ?></div>
                <div>Categorias</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-university fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge"><?php echo wp_count_posts('instituicoes')->publish; ?></div>
                <div>IC's</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12"><hr></div>
    </div>

    <div class="row">
      <div class="col-xs-12 col-sm-8">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <i class="fa fa-flag-checkered" aria-hidden="true"></i> Bem vindo
          </div>
          <div class="panel-body panel-height">
            <p>Este ambiente tem o intuito de faciliar a transparencia na CCCI, disponibilizando a todos os membros, documentos e comunicados oficiais.</p>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <i class="fa fa-link" aria-hidden="true"></i> Links Úteis
          </div>
          <div class="panel-body panel-height">
            <ol>
              <li><a href="http://www.tertuliaconscienciologia.org/" target="_blank">Tertúlia</a></li>
              <li><a href="http://enciclopediadaconscienciologia.org/" target="_blank">Programa Amigos da Enciclopédia</a></li>
              <li><a href="http://www.icge.org.br/wordpress/" target="_blank">ICGE</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <i class="fa fa-calendar"></i> Agenda Integrada
          </div>
          <div class="panel-body">
            <iframe style="width: 100%;" src="https://www.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=73jd29s9kgolcu6achaf5gaiqs%40group.calendar.google.com&amp;color=%23875509&amp;src=85d0dtv0ndmga5jjj652iirso4%40group.calendar.google.com&amp;color=%23B1440E&amp;src=huukt9vhtlhoi1iivlgl93unn8%40group.calendar.google.com&amp;color=%235229A3&amp;src=7jlpalg6v6apb2oudgud1fkn0k%40group.calendar.google.com&amp;color=%23B1365F&amp;src=n0fps9vm2ov48r3ruosspgj254%40group.calendar.google.com&amp;color=%23333333&amp;src=ldnib1uakjjcsrkmu8i2ucvmc0%40group.calendar.google.com&amp;color=%2323164E&amp;src=1njmadi6vj78bkoeqlc972mqbg%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=panhe2cduqnc9p13qqeqstcf44%40group.calendar.google.com&amp;color=%231B887A&amp;src=mhvppjk1aaoqtmub45k4vca0jg%40group.calendar.google.com&amp;color=%235F6B02&amp;src=gapddv0hl47ogictmvss66bods%40group.calendar.google.com&amp;color=%235229A3&amp;src=77fhligojdt2u02m8n6c99mfps%40group.calendar.google.com&amp;color=%23711616&amp;src=fteb4a2rf05c8q1tfq1a70cdi4%40group.calendar.google.com&amp;color=%23853104&amp;src=1hi5q8n1odguprei1qbn1bj9h0%40group.calendar.google.com&amp;color=%2342104A&amp;src=nacpu824q5t0tpi4hq5gtchs0o%40group.calendar.google.com&amp;color=%23865A5A&amp;src=guaiskjhmt1jsamkgb7cqdssoc%40group.calendar.google.com&amp;color=%238D6F47&amp;src=l1od0q30e09acmplu3q29qgcl0%40group.calendar.google.com&amp;color=%23711616&amp;src=b7eo0obrhebcu6738p6gjcve7o%40group.calendar.google.com&amp;color=%236B3304&amp;src=0dnmrok5ctaudkuhoosbuul5ts%40group.calendar.google.com&amp;color=%23182C57&amp;src=95318ed4svmlqqg7m8pdqmso3k%40group.calendar.google.com&amp;color=%2328754E&amp;src=n6vk1qce91q36lhdb2bmq2kms0%40group.calendar.google.com&amp;color=%235F6B02&amp;src=e0hg1rbkn2irob1oql330h51b4%40group.calendar.google.com&amp;color=%2329527A&amp;src=du794e2q2831f9kjj6b88iq5f4%40group.calendar.google.com&amp;color=%230F4B38&amp;src=gtbb90j7oi27cf9u65smlnv0oo%40group.calendar.google.com&amp;color=%238C500B&amp;src=rpne4o781c1t0sm63f72bnlpuk%40group.calendar.google.com&amp;color=%23711616&amp;src=ge327mmt619fjlf0pggnf8hk8g%40group.calendar.google.com&amp;color=%232F6309&amp;ctz=America%2FSao_Paulo" scrolling="no" data-mce-fragment="1" height="500" frameborder="0"></iframe>
          </div>
        </div>
      </div>

      
    </div>
  </div>
</div>
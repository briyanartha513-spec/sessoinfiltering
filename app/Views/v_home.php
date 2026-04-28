<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Game</th>
                    <th scope="col">Diamond</th>
                    <th scope="col">Item In Game</th>
                    <th scope="col">payment data time</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Free Fire</td>
                    <td>100,
                      150,
                      350,
                      500,
                      850,
                      1000.
                    </td>
                    <td>weapon skin</td>
                    <td>15:00-17:00</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Mobile Legend</td>
                    <td>15,
                      70,
                      150,
                      250,
                      550,
                      750,
                      1000.
                    </td>
                    <td>Skin Elite-Epic,Wdp</td>
                    <td>12:00-18:00</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Roblox</td>
                    <td>80,100,400,800,1200,1700,4500,</td>
                    <td>Topi Koboi,Sepatu Abibas</td>
                    <td>10:00-10:30</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Pubg Mobile</td>
                    <td>60uc,120uc,240uc,620uc</td>
                    <td>Skin m4 glacier</td>
                    <td>11:00-11:10</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Blood Strike</td>
                    <td>120gold,240gold,480gold,920gold</td>
                    <td>create SKIN LEGENDARY</td>
                    <td>09:00-09:11</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
               <?= $this->endSection() ?>
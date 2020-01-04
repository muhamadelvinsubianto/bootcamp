<?php
function biodata()
{
	$biodata = [
		'Nama' => 'Muhamad Elvin Subianto',
		'Age' => '19',
		'address' => 'Dusun Manis Desa Sukadna Kec.Ciawigebang Kab. Kuningan Jawa Barat',
		'hobbies' => ['olahraga' ],
		'is_married' => false,
		'list_school' => [
			[
				'name' => 'SDN  2 Sukadana',
				'years_in' => '2006',
				'years out' => '2012',
				'major' => null,
			],
			[
				'name' => 'MTS PUI Ciawigebang',
				'years_in' => '2012',
				'years out' => '2015',
				'major' => null,
			],
			[
				'name' => 'SMKN 3 Kuningan',
				'years_in' => '2015',
				'years out' => '2018',
				'major' => 'TSM (Teknik Sepeda Motor)',
			]
			
		],
		'skills' => [
			[
				'name' => 'HTML',
				'level' => 'Cukup'
			],
			[
				'name' => 'PHP',
				'level' => 'Cukup'
			],
			[
				'name' => 'MySQL',
				'level' => 'Cukup'
			],
			
		],
		'interest_in_coding' => true,
	];
	return json_encode($biodata);
}
echo (biodata());
?>
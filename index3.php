<?php

// PCの5次元配列を定義
$pc = array( //メーカーの要素
            
                array( //インチの要素
                    array( //メモリの要素
                        array( //Officeの要素
                            array( //保証の要素
                                'Mac 14インチ 32GB Office付き 保証あり','Mac 14インチ 32GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'Mac 14インチ 32GB Officeなし 保証あり','Mac 14インチ 32GB Officeなし 保証なし'
                            ),    
                        ),
                        array( //Officeの要素
                            array( //保証の要素
                                'Mac 14インチ 64GB Office付き 保証あり','Mac 14インチ 64GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'Mac 14インチ 64GB Officeなし 保証あり','Mac 14インチ 64GB Officeなし 保証なし'
                            ),                    
                        )
                    ),
                    array( //メモリの要素
                        array( //Officeの要素
                            array( //保証の要素
                                'Mac 16インチ 32GB Office付き 保証あり','Mac 16インチ 32GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'Mac 16インチ 32GB Officeなし 保証あり','Mac 16インチ 32GB Officeなし 保証なし'
                            ),    
                        ),
                        array( //Officeの要素
                            array( //保証の要素
                                'Mac 16インチ 64GB Office付き 保証あり','Mac 16インチ 64GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'Mac 16インチ 64GB Officeなし 保証あり','Mac 16インチ 64GB Officeなし 保証なし'
                            ),
                       )
                    )           
                ),
                array( //インチの要素
                    array( //メモリの要素
                        array( //Officeの要素
                            array( //保証の要素
                                'SONY 14インチ 32GB Office付き 保証あり','SONY 14インチ 32GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'SONY 14インチ 32GB Officeなし 保証あり','SONY 14インチ 32GB Officeなし 保証なし'
                            ),    
                        ),
                        array( //Officeの要素
                            array( //保証の要素
                                'SONY 14インチ 64GB Office付き 保証あり','SONY 14インチ 64GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'SONY 14インチ 64GB Officeなし 保証あり','SONY 14インチ 64GB Officeなし 保証なし'
                            ),                    
                        )
                    ),
                    array( //メモリの要素
                        array( //Officeの要素
                            array( //保証の要素
                                'SONY 16インチ 32GB Office付き 保証あり','SONY 16インチ 32GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'SONY 16インチ 32GB Officeなし 保証あり','SONY 16インチ 32GB Officeなし 保証なし'
                            ),    
                        ),
                        array( //Officeの要素
                            array( //保証の要素
                                'SONY 16インチ 64GB Office付き 保証あり','SONY 16インチ 64GB Office付き 保証なし'
                            ),
                            array( //保証の要素
                                'SONY 16インチ 64GB Officeなし 保証あり','SONY 16インチ 64GB Officeなし 保証なし'
                            ),
                       )
                    )           
                )
        );

echo $pc[0][0][0][0][0];


?>


<!-- 
メーカー Mac SONY
インチ   14 inch 16 inch
メモリ   32GB 16GB
office  あり なし
保証    あり なし -->
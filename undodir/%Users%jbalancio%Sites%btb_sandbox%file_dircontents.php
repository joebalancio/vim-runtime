Vim�UnDo� 0BOvc�N�O�@j��VGd~��u���㯹_   "                                   L�    _�                             ����                                                                                                                                                                                                                                                                                                                                                             L�     �                   5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             L�    �                <?php 5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             L�~    �   
            "    if($dir_handle = open($dir)) {5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             L��    �                       �             5�_�                           ����                                                                                                                                                                                                                                                                                                                                                             L��     �                       �             5�_�                            ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�2     �             5�_�                            ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�6     �                �             5�_�      	                     ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�V     �               %    if($dir_handle = opendir($dir)) {5�_�      
           	          ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�[     �               $    if($dir_array = opendir($dir)) {5�_�   	              
          ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�j     �               1        while($filename = readdir($dir_handle)) {5�_�   
                        ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�}     �                /            echo "filename: {$filename}<br />";5�_�                           ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L��     �                           �             5�_�                            ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L��     �      "   !       �      !        5�_�                           ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L��     �         "      )            uf(stripos($file, '.') > 0) {5�_�                            ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L��    �         #       �         "    5�_�                            ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�	     �                        closedir($dir_handle);5�_�                            ����                                                                                                                                                                                                                                                                                                                            
                    V   2    L�    �                3        // use rewinddir($dir_handle) to start over5��
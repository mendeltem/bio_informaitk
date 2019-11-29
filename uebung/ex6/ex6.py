# -*- coding: utf-8 -*-
"""
Created on Fri Nov 22 09:49:24 2019

@author: pandoora
"""

import os

db = "globins.fasta"


#os.system("less "+db)



#os.system("clustalw globins.fasta -OUTFILE=outputfile.aln")


#os.system("grep -e "+db+" 'human_b' -A3")


os.system("phylip retree")
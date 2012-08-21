package org.dhappy.mimis;

import telehash.api.InterestingEndsHolder;
import telehash.switchimpl.api.InterestingEndsHolderImpl;

public class ObjectCreationWorkaround {
    public static InterestingEndsHolder getInterestingEndsHolder() {
        return new InterestingEndsHolderImpl();
    }
}
